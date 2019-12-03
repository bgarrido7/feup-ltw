PRAGMA foreign_keys = ON;

DROP TABLE IF EXISTS Users;

CREATE TABLE Users(
	userID INTEGER PRIMARY KEY AUTOINCREMENT,
	name TEXT NOT NULL,
	password BLOB NOT NULL,
	birthday DATE,
	email TEXT NOT NULL,
	pictureID INTEGER REFERENCES Pictures(pictureID)
);

DROP TABLE IF EXISTS Chats;

CREATE TABLE Chats(
	chatID INTEGER PRIMARY KEY,
	touristID INTEGER REFERENCES Users(userID) NOT NULL,
	ownerID INTEGER REFERENCES Users(userID) NOT NULL,
	--Unique constraint on the foreign key pair?
	UNIQUE(touristID, ownerID)
);

DROP TABLE IF EXISTS Messages;

CREATE TABLE Messages(
	messageID INTEGER PRIMARY KEY,
	senderID INTEGER REFERENCES Users(userID) NOT NULL,
	chatID INTEGER REFERENCES Chats(chatID) NOT NULL,
	timeSent INTEGER NOT NULL,
	messageText TEXT NOT NULL,
	isRead INTEGER
);

DROP TABLE IF EXISTS Notifications;

CREATE TABLE Notifications(
	notificationID INTEGER PRIMARY KEY,
	userID INTEGER REFERENCES Users(userID) NOT NULL,
	isRead INTEGER
); -- add implementations.


DROP TABLE IF EXISTS Houses;

CREATE TABLE Houses(
	houseID INTEGER PRIMARY KEY,
	name TEXT NOT NULL,
	location TEXT NOT NULL,
	dailyPrice REAL NOT NULL,
	description TEXT NOT NULL,
	pool BIT NOT NULL,
	cableTV BIT NOT NULL,
	Wifi BIT NOT NULL,
	AC BIT NOT NULL,
	kitchen Bit NOT NULL
);

DROP TABLE IF EXISTS Review;

CREATE TABLE Review(
	houseID INTEGER REFERENCES Houses(houseID) NOT NULL,
	userID INTEGER REFERENCES Users(userID) NOT NULL,
	reviewText TEXT,
	rating INTEGER NOT NULL,
	ownerReply TEXT,
	PRIMARY KEY (houseID, userID)
);

DROP TABLE IF EXISTS Pictures;

CREATE TABLE Pictures(
	pictureID INTEGER PRIMARY KEY,
	userID INTEGER NOT NULL REFERENCES Users(userID),
	picture BLOB,
	houseID INTEGER NOT NULL REFERENCES Houses(houseID)
);

DROP TABLE IF EXISTS Favourites;

CREATE TABLE Favourites(
	userID INTEGER NOT NULL REFERENCES Users(userID),
	houseID INTEGER NOT NULL REFERENCES Houses(houseID),
	PRIMARY KEY (houseID, userID)
);

DROP TABLE IF EXISTS Reservations;

CREATE TABLE Reservations(
	touristID INTEGER NOT NULL REFERENCES Users(userID),
	houseID INTEGER NOT NULL REFERENCES Houses(houseID),
	arriveDate NUMERIC NOT NULL, --maybe change?
	stayLength INTEGER NOT NULL,
	guests INTEGER,
	PRIMARY KEY (touristID,houseID)
)


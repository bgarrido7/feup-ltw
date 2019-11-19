PRAGMA foreign_keys = ON;

CREATE TABLE Users(
	userID INTEGER PRIMARY KEY,
	name TEXT NOT NULL,
	password BLOB NOT NULL,
	birthday DATE,
	email TEXT NOT NULL,
	pictureID INTEGER REFERENCES Pictures(pictureID)
);
CREATE TABLE Chats(
	chatID INTEGER PRIMARY KEY,
	touristID INTEGER REFERENCES Users(userID) NOT NULL,
	ownerID INTEGER REFERENCES Users(userID) NOT NULL,
	--Unique constraint on the foreign key pair?
	UNIQUE(touristID, ownerID)
);
CREATE TABLE Messages(
	messageID INTEGER PRIMARY KEY,
	senderID INTEGER REFERENCES Users(userID) NOT NULL,
	chatID INTEGER REFERENCES Chats(chatID) NOT NULL,
	timeSent INTEGER NOT NULL,
	messageText TEXT NOT NULL,
	isRead INTEGER
);
CREATE TABLE Notifications(
	notificationID INTEGER PRIMARY KEY,
	userID INTEGER REFERENCES Users(userID) NOT NULL,
	isRead INTEGER
); -- add implementations.
CREATE TABLE Houses(
	houseID INTEGER PRIMARY KEY,
	name TEXT NOT NULL,
	--location
	dailyPrice REAL NOT NULL,
	description TEXT
	--house features.
);
CREATE TABLE Review(
	houseID INTEGER REFERENCES Houses(houseID) NOT NULL,
	userID INTEGER REFERENCES Users(userID) NOT NULL,
	reviewText TEXT,
	rating INTEGER NOT NULL,
	ownerReply TEXT,
	PRIMARY KEY (houseID, userID)
);
CREATE TABLE Pictures(
	pictureID INTEGER PRIMARY KEY,
	userID INTEGER NOT NULL REFERENCES Users(userID),
	picture BLOB,
	houseID INTEGER NOT NULL REFERENCES Houses(houseID)
);
CREATE TABLE Favourites(
	userID INTEGER NOT NULL REFERENCES Users(userID),
	houseID INTEGER NOT NULL REFERENCES Houses(houseID),
	PRIMARY KEY (houseID, userID)
);
CREATE TABLE Reservations(
	touristID INTEGER NOT NULL REFERENCES Users(userID),
	houseID INTEGER NOT NULL REFERENCES Houses(houseID),
	arriveDate NUMERIC NOT NULL, --maybe change?
	stayLength INTEGER NOT NULL,
	guests INTEGER,
	PRIMARY KEY (touristID,houseID)
)
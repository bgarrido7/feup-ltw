
INSERT INTO Users(name, password, birthday, email) 
VALUES ("John Doe", '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '1998-10-10', "johndoe@gmail.com");


INSERT INTO Users(name, password, birthday, email) 
VALUES ("John Snow", '1f9a5485ccfb043c2e20ba65af986c4ba82013b4681756a873c3c2825a7bbcd9', '1990-10-10', "stark_bastard@gmail.com");


INSERT INTO Users(name, password, birthday, email) 
VALUES ("Jamie Lanister", '557ae9fcd08f6cbf53d5f4507882609a3ef49016f67e77063da4ad9233c5e2f4', '1964-11-5', "jamie_lanister@gmail.com");


INSERT INTO Users(name, password, birthday, email) 
VALUES ("Cercei Lanister", 'a9c3c1f7674502331a5ad3e54592d3eb2fc39cf78bb908004777ff4ac89119e4', '1964-11-5', "lanister_c@gmail.com");

INSERT INTO Houses(name, location, dailyPrice, description, pool,cableTV, Wifi, AC, kitchen)   
VALUES("country house in the suburbs","USA","100","perfect for families and old people",1,1,1,0,1) ;

INSERT INTO Houses(name, location, dailyPrice, description, pool,cableTV, Wifi, AC, kitchen)   
VALUES("small house in the Snow","Switzerland","50","for people who like snow",0,0,1,1,1) ;

INSERT INTO Houses(name, location, dailyPrice, description, pool,cableTV, Wifi, AC, kitchen)   
VALUES("party house for big groups of friends","Poland","20","no neighbours, go crazy, go wild kids. Perfect for cold nights",0,0,1,1,1) ;

INSERT INTO Houses(name, location, dailyPrice, description, pool,cableTV, Wifi, AC, kitchen)   
VALUES("summer home","Spain","30","spend your summer vacation on this cozy house with a view to the village",1,1,1,0,1) ;


INSERT INTO Owners (userID, houseID) VALUES (1, 1);
INSERT INTO Owners (userID, houseID) VALUES (3, 2);
INSERT INTO Owners (userID, houseID) VALUES (1, 3);
INSERT INTO Owners (userID, houseID) VALUES (1, 4);


INSERT INTO Reservations (touristID, houseID, arriveDate, stayLength) 
VALUES (3, 1, '2020-09-09', 5);
INSERT INTO Reservations (touristID, houseID, arriveDate, stayLength) 
VALUES (3, 1, '2020-05-02', 3);
INSERT INTO Reservations (touristID, houseID, arriveDate, stayLength) 
VALUES (2, 1, '2019-12-10', 9);
INSERT INTO Reservations (touristID, houseID, arriveDate, stayLength) 
VALUES (3, 3, '2019-12-12', 2);
INSERT INTO Reservations (touristID, houseID, arriveDate, stayLength) 
VALUES (3, 4, '2019-12-10', 10);
CREATE TABLE category (
  id INTEGER PRIMARY KEY,
  name VARCHAR NOT NULL
);

CREATE TABLE product (
  id INTEGER PRIMARY KEY,
  name VARCHAR NOT NULL,
  price NUMERIC(5,2) NOT NULL,
  cat_id INTEGER REFERENCES category NOT NULL
);

CREATE TABLE users (
  username VARCHAR PRIMARY KEY,
  password VARCHAR
);

INSERT INTO category VALUES (1, 'Fruits');

INSERT INTO product VALUES (1, 'Apples', '9.99', 1);
INSERT INTO product VALUES (2, 'Oranges', '4.99', 1);
INSERT INTO product VALUES (3, 'Pears', '3.99', 1);
INSERT INTO product VALUES (4, 'Pineapples', '2.99', 1);
INSERT INTO product VALUES (5, 'Bananas', '7.99', 1); 

INSERT INTO category VALUES (2, 'Clothes');

INSERT INTO product VALUES (6, 'Shirt', '3.99', 2);
INSERT INTO product VALUES (7, 'Jeans', '12.99', 2);
INSERT INTO product VALUES (8, 'Sweat Shirt', '9.99', 2);

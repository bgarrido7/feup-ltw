CREATE TABLE recipes (
  rcp_id INTEGER PRIMARY KEY,
  rcp_name VARCHAR NOT NULL UNIQUE
);

CREATE TABLE ingredients (
  ing_id INTEGER PRIMARY KEY,
  ing_quantity VARCHAR NOT NULL,
  ing_name VARCHAR NOT NULL,
  rcp_id INTEGER NOT NULL REFERENCES recipes
);

CREATE TABLE steps (
  stp_id INTEGER PRIMARY KEY,
  stp_description VARCHAR NOT NULL,
  rcp_id INTEGER NOT NULL REFERENCES recipes
);

INSERT INTO recipes VALUES (NULL, 'Omelet');

INSERT INTO ingredients VALUES (NULL, '2', 'Eggs', 1);
INSERT INTO ingredients VALUES (NULL, '2 Tablespoons', 'Water', 1);
INSERT INTO ingredients VALUES (NULL, '1/8 Tablespoons', 'Salt', 1);
INSERT INTO ingredients VALUES (NULL, 'A dash', 'Pepper', 1);
INSERT INTO ingredients VALUES (NULL, '1 Tablespoon', 'Butter', 1);
INSERT INTO ingredients VALUES (NULL, '1/2 Cup', 'Filling (cheese, ham, ...)', 1);

INSERT INTO steps VALUES (NULL, 'BEAT eggs, water, salt and pepper in small bowl until blended.', 1);
INSERT INTO steps VALUES (NULL, 'HEAT butter in 7 to 10-inch nonstick omelet pan or skillet over medium-high heat until hot. TILT pan to coat bottom. POUR IN egg mixture. Mixture should set immediately at edges.', 1);
INSERT INTO steps VALUES (NULL, 'GENTLY PUSH cooked portions from edges toward the center with inverted turner so that uncooked eggs can reach the hot pan surface. CONTINUE cooking, tilting pan and gently moving cooked portions as needed.', 1);
INSERT INTO steps VALUES (NULL, 'When top surface of eggs is thickened and no visible liquid egg remains, PLACE filling on one side of the omelet. FOLD omelet in half with turner. With a quick flip of the wrist, turn pan and INVERT or SLIDE omelet onto plate. SERVE immediately.', 1);

INSERT INTO recipes VALUES (NULL, 'Scrambled Egg');

INSERT INTO ingredients VALUES (NULL, '4', 'Eggs', 2);
INSERT INTO ingredients VALUES (NULL, '1/2 Cup', 'Milk', 2);
INSERT INTO ingredients VALUES (NULL, 'A dash', 'Salt and Pepper', 2);
INSERT INTO ingredients VALUES (NULL, '2 Tablespoons', 'Butter', 2);

INSERT INTO steps VALUES (NULL, 'BEAT eggs, milk, salt and pepper in bowl until blended.', 2);
INSERT INTO steps VALUES (NULL, 'HEAT butter in large nonstick skillet over medium heat until hot. POUR IN egg mixture.', 2);
INSERT INTO steps VALUES (NULL, 'As eggs begin to set, GENTLY PULL the eggs across the pan with an inverted turner, forming large soft curds. CONTINUE cooking – pulling, lifting and folding eggs – until thickened and no visible liquid egg remains. Do not stir constantly. REMOVE from heat. SERVE stove top scrambled eggs.', 2);

INSERT INTO recipes VALUES (NULL, 'Boiled Egg');

INSERT INTO ingredients VALUES (NULL, '1', 'Egg', 3);

INSERT INTO steps VALUES (NULL, 'PLACE eggs in saucepan large enough to hold them in single layer. ADD cold water to cover eggs by 1 inch. HEAT over high heat just to boiling.', 3);
INSERT INTO steps VALUES (NULL, 'REMOVE from burner. COVER pan. LET EGGS STAND in hot water about 12 minutes for large eggs (9 minutes for medium eggs; 15 minutes for extra large).', 3);
INSERT INTO steps VALUES (NULL, 'DRAIN immediately and serve warm. OR, cool completely under cold running water or in bowl of ice water, then REFRIGERATE.', 3);

INSERT INTO recipes VALUES (NULL, 'Fried Egg');

INSERT INTO ingredients VALUES (NULL, '1', 'Egg', 4);
INSERT INTO ingredients VALUES (NULL, '1 Tablespoon', 'Butter', 4);
INSERT INTO ingredients VALUES (NULL, '1 Tablespoon', 'Butter', 4);
INSERT INTO ingredients VALUES (NULL, 'A dash', 'Salt and Pepper', 4);

INSERT INTO steps VALUES (NULL, 'For Over-Easy or Over-Hard Eggs: HEAT 2 tsp. butter in nonstick skillet over medium-high heat until hot.', 4);
INSERT INTO steps VALUES (NULL, 'BREAK eggs and SLIP into pan, 1 at a time. IMMEDIATELY reduce heat to low.', 4);
INSERT INTO steps VALUES (NULL, 'COOK SLOWLY until whites are completely set and yolks begin to thicken but are not hard. SLIDE turner under each egg and carefully FLIP it over in pan. COOK second side to desired doneness. SPRINKLE with salt and pepper. SERVE immediately.', 4);
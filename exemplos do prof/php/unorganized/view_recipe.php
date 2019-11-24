<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Egg Recipes</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1><a href="list_recipes.php">Egg Recipes</a></h1>
    </header>
<?php
  $dbh = new PDO('sqlite:recipes.db');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  $stmt = $dbh->prepare('SELECT * FROM recipes WHERE rcp_id = ?');
  $stmt->execute(array($_GET['id']));
  $recipe = $stmt->fetch();
  
  $stmt = $dbh->prepare('SELECT * FROM ingredients WHERE rcp_id = ?');
  $stmt->execute(array($_GET['id']));
  $ingredients = $stmt->fetchAll();
  
  $stmt = $dbh->prepare('SELECT * FROM steps WHERE rcp_id = ?');
  $stmt->execute(array($_GET['id']));
  $steps = $stmt->fetchAll();

  echo '<article class="recipe">';
  echo '<a href="view_recipe.php?id=' . $recipe['rcp_id'] .'">';
  echo '<h2>' . $recipe['rcp_name'] . '</h2>';
  echo '<img src="photos/' . $recipe['rcp_id'] . '.png" alt="Photo of ' . $recipe['rcp_name'] . '">';
  echo '</a>';

  echo '<section class="ingredients">';
  echo '<h3>Ingredients</h3>';
  echo '<ul>';
  foreach ($ingredients as $ingredient)
    echo '<li>' . $ingredient['ing_quantity'] . ' ' . $ingredient['ing_name'] . '</li>';
  echo '</ul>';
  echo '</section>';

  echo '<section class="steps">';
  echo '<h3>Steps</h3>';
  echo '<ul>';
  foreach ($steps as $step) 
    echo '<li>' . $step['stp_description'] . '</li>';
  echo '</ul>';
  echo '</section>';
  
  echo '</article>';
?>
  </body>
</html>
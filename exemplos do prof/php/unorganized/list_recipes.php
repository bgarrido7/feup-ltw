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

  $stmt = $dbh->prepare('SELECT * FROM recipes');
  $stmt->execute();
  $recipes = $stmt->fetchAll();

  echo '<section id="recipes">';
  foreach ($recipes as $recipe) {
    echo '<article class="recipe">';
    echo '<a href="view_recipe.php?id=' . $recipe['rcp_id'] . '">';
    echo '<h2>' . $recipe['rcp_name'] . '</h2>';
    echo '<img src="photos/' . $recipe['rcp_id'] . '.png" alt="Photo of ' . $recipe['rcp_name'] . '">';
    echo '</a>';
    echo '</article>';
  }
  echo '</section>';
?>
  </body>
</html>
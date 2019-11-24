<?php
  include_once('database/db_recipes.php');
  include('templates/tpl_common.php');
  include('templates/tpl_recipes.php');

  $rcp_id = $_GET['rcp_id'];

  $recipe = getRecipe($rcp_id);
  $ingredients = getRecipeIngredients($rcp_id);
  $steps = getRecipeSteps($rcp_id);

  draw_header();
  draw_recipe($recipe, $ingredients, $steps);
  draw_footer();
?>
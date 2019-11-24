<?php
  include('templates/tpl_common.php');
  include('templates/tpl_recipes.php');
  include_once('database/db_recipes.php');

  $recipes = getAllRecipes();

  draw_header();
  draw_recipes($recipes);
  draw_footer();
?>
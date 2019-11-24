<?php
  include_once('config/init.php');
  include_once('database/category.php');

  $categories = getAllCategories();
  
  include ('templates/header.php');
  include ('templates/list_categories.php');
  include ('templates/footer.php');
?>

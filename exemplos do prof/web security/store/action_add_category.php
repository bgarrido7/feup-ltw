<?php
  include_once('config/init.php');
  include_once('database/category.php');
  
  $name = trim(strip_tags($_POST['name']));

  createCategory($name);
  
  header('Location: list_categories.php');  
?>

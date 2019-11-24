<?php
  include_once('config/init.php');
  include_once('database/user.php');
  
  $username = trim(strip_tags($_POST['username']));
  $password = $_POST['password'];  

  createUser($username, $password);
  
  header('Location: list_categories.php');  
?>

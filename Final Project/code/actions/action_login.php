<?php
include_once('../includes/init.php');
include_once('../database/user.php');


  if (isLoginCorrect($_POST['name'], $_POST['pword'])) {
 //   setCurrentUser($_POST['name']);
    header('Location:  ../pages/homepage.php' /*. $_SERVER['HTTP_REFERER']*/);
}

  else{ 
    echo "login incorect";
    
  //<a href="../index.php">homepage</a>
  }

  ?>
   
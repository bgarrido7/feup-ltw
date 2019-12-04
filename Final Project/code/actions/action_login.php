<?php
include_once('../includes/init.php');
include_once('../database/user.php');


$result=isLoginCorrect($_POST['email'], $_POST['pword']);
  if ($result == -1) {
    echo "\user doesn't exist\n";
    ?>
    <a href="../index.php">homepage</a>
    <?php
  }
elseif($result== 0){
  echo "\npassword incorrect";
  ?>
  <a href="../index.php">homepage</a>
  <?php
}
  else{ 
//    header('Location:  ../pages/homepage.php' /*. $_SERVER['HTTP_REFERER']*/);
    setCurrentUser($_POST['email']);
    header('Location:  ../pages/homepage.php');
 }

  ?>
   
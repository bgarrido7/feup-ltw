<?php
include_once('../includes/init.php');
include_once('../database/user.php');
include_once('../template/common/header.php');

$result=isLoginCorrect($_POST['email'], $_POST['pword']);
if ($result == -1) {
    echo "\nuser doesn't exist\n";
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
    setCurrentUser( getID($email), $_POST['email']);
    header('Location:  ../pages/homepage.php');
 }



  ?>
   
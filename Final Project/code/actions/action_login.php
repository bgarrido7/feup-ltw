<?php
include_once('../includes/init.php');
include_once('../database/user.php');
include_once('../template/common/header.php');

$result=isLoginCorrect($_POST['email'], $_POST['pword']);
if ($result == -1) {
  $_SESSION['error']="user doesn't exist";
  header('Location:  ../pages/login.php');

  }
elseif($result== 0){
  $_SESSION['error']="password incorrect";
  header('Location:  ../pages/login.php');

}
  else{ 
    unset($_SESSION['error']);
//    header('Location:  ../pages/homepage.php' /*. $_SERVER['HTTP_REFERER']*/);
    setCurrentUser( getID($email), $_POST['email']);
    header('Location:  ../pages/homepage.php');
 }



  ?>
   
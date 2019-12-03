<?php
include_once('../includes/init.php');
include_once('../database/user.php');


$result=isLoginCorrect($_POST['email'], $_POST['pword']);
echo $result;
echo $_POST['email'];
echo $_POST['pword'];

  if ($result == -1) {
    echo "\nerror\n";
//    header('Location:  ../pages/homepage.php' /*. $_SERVER['HTTP_REFERER']*/);
    ?>
    <a href="../index.php">homepage</a>
    <?php
  }

  else{ 
 //   setCurrentUser($_POST['email']);
    header('Location:  ../pages/homepage.php');
 }

  ?>
   
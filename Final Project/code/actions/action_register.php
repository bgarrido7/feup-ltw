<?php

include_once('../includes/init.php');
include_once('../database/user.php');


if (!$name || !$pword || !$bday || !$email || !$repeatPword) {
    $_SESSION['ERROR'] = 'All fields are mandatory!';
  //  header("Location: register.php");

}
else if(duplicateEmail($_POST['email'])){
    $_SESSION['ERROR'] = 'Duplicated Email';
 //   header("Location:".$_SERVER['HTTP_REFERER']."");
}
else if (!(strcmp($pword, $repeatPword))){
    $_SESSION['ERROR'] = 'Passwords don\'t match';

}

else if((strlen($pword)*8 < 5){
    $_SESSION['ERROR'] = 'Password needs to be at least 5 characters long';

}

else if (($userID = createUser($_POST['name'], $_POST['pword'], $_POST['bday'], $_POST['email'])) != -1) {
      echo 'User Registered successfully';
     setCurrentUser($userID, $_POST['name']);
 //    header("Location:../index.php");	
 }
 
 else{
      $_SESSION['ERROR'] = 'ERROR';
  //    header("Location:".$_SERVER['HTTP_REFERER']."");
 }

?>
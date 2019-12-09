<?php
include_once('../includes/init.php');
include_once('../database/user.php');

$userID = createUser($_POST['name'], $_POST['email'], $_POST['pword'],$_POST['repeatPword'], $_POST['bday']);
if($userID == -1){
    echo "error";
}
else if($userID == -4){
    echo "passwords do not match";
   
}
else if($userID == -2){
    echo "invalid email";
    
}
else if($userID == -3){    
    //$_SESSION['ERROR'] = 'Duplicated Email';
    //   header("Location:".$_SERVER['HTTP_REFERER']."");
    echo "email already register"; 
    
}
else{
    setCurrentUser( getID($_POST['email']), $_POST['email']);
   header("Location: ../pages/homepage.php");
//header("Location: ../pages/error.php");
//setCurrentUser($userID, $_POST['name']);

}
setUserPhoto($userID, );

?>
    <a href="../register.php">try again</a>
    <?php

?>
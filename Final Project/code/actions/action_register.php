<?php
include_once('../includes/init.php');
include_once('../includes/session.php');
include_once('../database/user.php');

$userID = createUser($_POST['name'], $_POST['email'], $_POST['pword'],$_POST['repeatPword'], $_POST['bday']);
if($userID == -1){
    $_SESSION['error']="login error";
    echo "error";
}
else if($userID == -4){
    $_SESSION['error']="passwords do not match";
    header("Location: ../pages/register.php");

}
else if($userID == -3){    
    $_SESSION['error']="email already register";
    header("Location: ../pages/register.php");
}
else{  
     unset($_SESSION['error']);
    setCurrentUser( getID($_POST['email']), $_POST['email']);
   header("Location: ../pages/homepage.php");


}
//setUserPhoto($userID , );

?>
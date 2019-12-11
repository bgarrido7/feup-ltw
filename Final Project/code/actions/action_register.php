<?php
include_once('../includes/init.php');
include_once('../includes/session.php');
include_once('../database/user.php');

$userID = createUser($_POST['name'], $_POST['email'], $_POST['pword'],$_POST['repeatPword'], $_POST['bday']);

//----------------------------for user pic--------------------------------- 
$target_dir = "../images/users/";

$file = $_FILES['fileToUpload']['name'];
$path = pathinfo($file);
$filename = $path['filename'];

$target_file = ( $target_dir.$userID.".".$path['extension'] ) ;

$source_file = $_FILES["fileToUpload"]["tmp_name"];

if( move_uploaded_file($source_file, $target_file)!==TRUE){
    $_SESSION['error']="error uploading photo";
    header("Location: ../pages/register.php");

}
//---------------------------------------------------------------------------

if($userID == -1){
    $_SESSION['error']="login error";
    header("Location: ../pages/register.php");

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
    setCurrentUser( $userID, $_POST['email']);
    header("Location: ../pages/homepage.php");
} 


?>
<?php
    include_once('../includes/init.php');
    include_once("../database/user.php");

    $name = $_POST['name'];
    $email =$_SESSION['email'];
    $pword = $_POST['pword'];
    $bday=$_POST['bday'];
    $repeatPword = $_POST['repeatPword'];

if($name!=null){
    if(updateUserInfo(getID($email)['userID'], $name)){
        setCurrentUser(getID($email)['userID'],$email);
        echo "profile updated with sucess";
   
    }
    else
        echo "error updating profile";
}

if(updateBday(getID($email)['userID'], $bday))
echo "bday updated";

else
echo "bday not updated";

if($pword!=null){
    if(strcmp($pword, $repeatPword))
        echo "passwords don't match";

    else{
        if (updatePassword(getID($email), $pword))
            echo "password updated";
        else    
            echo "error updating password";
    }
    
}
    /*-----------------------------------------------------------------------------------
    header("Location:".$_SERVER['HTTP_REFERER']."");
    ---------------------------------------------------------------------------------*/
    header('Location:  ../pages/homepage.php');

?>    

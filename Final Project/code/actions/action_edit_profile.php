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

if(getBirthday($email)['birthday'] != $bday){
        
    if(updateBday(getID($email)['userID'], $bday))
        echo "bday updated";

    else
        echo "error updating bday";
}
if($pword!=null){
    if(strcmp($pword, $repeatPword)){
        echo "passwords don't match";
        ?><a href=../pages/profile.php><?php
    }
    else{
        $result=updatePassword(getID($email)['userID'], $pword);
        echo $result;
        if ($result)
            echo "password updated";
        else    
            echo "error updating password";

    }
    
}    header('Location:  ../pages/homepage.php');

    /*-----------------------------------------------------------------------------------
    header("Location:".$_SERVER['HTTP_REFERER']."");
    ---------------------------------------------------------------------------------*/

?>    

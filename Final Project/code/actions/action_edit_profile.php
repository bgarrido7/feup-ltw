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
        unset($_SESSION['error']); 
        header('Location:  ../pages/homepage.php');

    }
    else{
        $_SESSION['error']="error updating profile";
        header('Location:  ../pages/profile.php');

    }
}

if(getBirthday($email)['birthday'] != $bday){
        
    if(updateBday(getID($email)['userID'], $bday)){
        unset($_SESSION['error']); 
        header('Location:  ../pages/homepage.php');

    }

    else{
        $_SESSION['error']="error updating birthday";
        header('Location:  ../pages/profile.php');

    }
       
}
if($pword!=null){
    if(strcmp($pword, $repeatPword)){
        $_SESSION['error']="passwords don't match";
        header('Location:  ../pages/profile.php');    
    }
    else{
        $result=updatePassword(getID($email)['userID'], $pword);
        if ($result)
            header('Location:  ../pages/homepage.php');
        else{          
         $_SESSION['error']="error updating password";
         header('Location:  ../pages/profile.php');
    }  
}

    }
   

    /*-----------------------------------------------------------------------------------
    header("Location:".$_SERVER['HTTP_REFERER']."");
    ---------------------------------------------------------------------------------*/

?>    

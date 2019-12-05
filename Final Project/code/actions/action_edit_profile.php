<?php
    include_once('../includes/init.php');
    include_once("../database/user.php");

    $name = $_POST['name'];
    $email =$_SESSION['email'];
    $pword = $_POST['pword'];
    $repeatPword = $_POST['repeatPword'];

if($name!=null){
    if(updateUserInfo(getID($email), $name)){
        setCurrentUser(getID($email),$email);
        echo "profile updated with sucess";
   ?>    
    <a href="../pages/homepage.php">homepage</a>
<?php
    }
    else
        echo "error updating profile";
}

if($pword!=null){
    if(strcmp($pword, $repeatPword))
        echo "passwords don't match";

    else{
        if (updatePassword(getID($email), $pword))
            echo "password updated";
        else    
            echo "error updating password";
    }
    ?>    
    <a href="../pages/homepage.php">homepage</a>
<?php
}

    /*-----------------------------sofia---------------------------------------------------
    if((isLoginCorrect($_SESSION['email']['name'], $_POST['pword'])) != -1){
        if($name !== null && $email!==null) {

            if(updateUserInfo (getID(), $name, $email)){
                setCurrentUser(getID(), $email);
                $_SESSION['email'] = getUser($_SESSION['email']);

                if($pword != null){
                    if(!updatePassword(getID(), $pword, $repeatPword))
                        $_SESSION['ERROR']= "Error: updating password";                    
                }

            } else $_SESSION['ERROR'] = "Error: updating data base";      

        } else $_SESSION['ERROR'] = "Error: name, username, email and password cannot be null";

    } else $_SESSION['ERROR'] = "Error: password is not correct";


    header("Location:".$_SERVER['HTTP_REFERER']."");
        ---------------------------------------------------------------------------------*/
?>
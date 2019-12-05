<head>
    <title>Jūkyo</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/site/logo.svg" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

<?php


include_once('../includes/init.php');
include_once('../database/user.php');

$userID = createUser($_POST['name'], $_POST['email'], $_POST['pword'],$_POST['repeatPword'], $_POST['bday']);

if($userID == -1){
    echo "error";
    ?>
    <a href="../index.php">go back</a>
    <?php
}
else if($userID == -4){
    echo "passwords do not match";
    ?>
    <a href="../register.php">try again</a>
    <?php
}
else if($userID == -2){
    echo "invalid email";
    ?>
    <a href="../register.php">try again</a>
    <?php
}
else if($userID == -3){    
    //$_SESSION['ERROR'] = 'Duplicated Email';
    //   header("Location:".$_SERVER['HTTP_REFERER']."");
    echo "email already register"; 
    ?>
    <a href="../register.php">try again</a>
    <?php
}
else{
    setCurrentUser( getID($_POST['email']), $_POST['email']);
   header("Location: ../pages/homepage.php");
//header("Location: ../pages/error.php");
//setCurrentUser($userID, $_POST['name']);

}



?>
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

echo $_POST['name']; 
echo $_POST['pword'];
echo $_POST['bday'];
echo $_POST['email'];

$userID = createUser($_POST['name'], $_POST['pword'], $_POST['bday'], $_POST['email']);
echo "ah\n";
if($userID != -1){
    echo "registation sucesfull";
    header("Location: error.html");
}
else{
echo "error\n";
header("Location: index.php");
}
/*
if (!$_POST['name'] || !$pword || !$bday || !$email || !$repeatPword) {
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
*/


?>
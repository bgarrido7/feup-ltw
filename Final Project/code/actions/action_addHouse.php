<?php
include_once('../includes/init.php');
include_once('../database/houses.php');
include_once('../database/user.php');

$name=$_POST['name'];
$location=$_POST['city'];
$price= $_POST['price'];
$desc=$_POST['desc'];

$pool=0;
$cable=0;
$wifi=0;
$ac=0;
$kitchen=0;

if(isset($_POST['pool']))
$pool=1;

if(isset($_POST['cable']))
$cable=1;

if(isset($_POST['wifi']))
$wifi=1;

if(isset($_POST['ac']))
$ac=1;

if(isset($_POST['kitchen']))
$kitchen=1;

$houseID = addHouse(getID($_SESSION['email'])['userID'], $name,$location,$price,$desc,$pool,$cable, $wifi, $ac, $kitchen);

 if($houseID!=-1){
   unset($_SESSION['error']);
   getHouse($houseID);
    }
 
 else{
   $_SESSION['error']="add house error";
   echo $result; 
 }

 header("Location: ../pages/myHouses.php");
 //  include_once('includes/init.php');
//  addHouse($_GET['id']);
//  header('Location: ' /*. $_SERVER['HTTP_REFERER']*/);
?>




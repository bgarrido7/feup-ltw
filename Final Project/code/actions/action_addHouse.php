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

//----------------------------for house pic--------------------------------- 
$target_dir = "../images/houses/";

$file = $_FILES['fileToUpload']['name'];
$path = pathinfo($file);
$filename = $path['filename'];

$target_file = ( $target_dir.$houseID.".".$path['extension'] ) ;

$source_file = $_FILES["fileToUpload"]["tmp_name"];

if( move_uploaded_file($source_file, $target_file)!==TRUE){
    $_SESSION['error']="error uploading photo";

}
//---------------------------------------------------------------------------

 if($houseID!=-1){
   unset($_SESSION['error']);
    }
 
 else{
   $_SESSION['error']="add house error";
 }

 header("Location: ../pages/myHouses.php");

?>




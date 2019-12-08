<?php
include_once('../includes/init.php');
include_once('../database/houses.php');

$houseID=$_POST['houseID'];
$local=$_POST['city']; 

$name=getHouseAttributes($houseID)['name']; 
$price=getHouseAttributes($houseID)['dailyPrice'];
$desc=getHouseAttributes($houseID)['description'];


if(!empty($_POST['name']))
$name=$_POST['name'];

if(!empty($_POST['price']))
$price=$_POST['price'];

if(!empty($_POST['desc']))
$desc=$_POST['desc'];

//---------------------------------tags---------------
if(!empty($_POST['pool']))
$pool=1;
else
$pool=0;

if(!empty($_POST['cable']))
$cable=1; 
else
$cable=0;

if(!empty($_POST['wifi']))
$wifi=1; 
else
$wifi=0;

if(!empty($_POST['ac']))
$ac=1; 
else
$ac=0;

if(!empty($_POST['kitchen']))
$kitchen=1; 
else
$kitchen=0;
//----------------------------------------------------

editHouse($name,$desc, $houseID, $price, $local, $pool, $cable, $wifi, $ac, $kitchen );

header('Location:  ../pages/myHouses.php');

?>
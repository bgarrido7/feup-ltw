<?php
include_once('../includes/init.php');
include_once("../database/houses.php");



$word = $_GET['word'];
//$city=$_GET['city'];
//$lowerPrice=$_GET['lowerPrice'];
//$upperPrice=$_GET['upperPrice'];

/*
$pool=$_POST['pool'];
$cable=$_POST['cable'];
$wifi=$_POST['wifi'];
$ac=$_POST['ac'];
$kitchen=$_POST['kitchen'];
*/
//if(!empty($word))
$result= findHouseByName($word);

//if(!empty($city))
//array_push($result , findHouseByCity($city));


//if(!empty($lowerPrice) && !empty($upperPrice))
//array_push($result , findHouseByPrice($lowerPrice,$upperPrice));


//$finalResult=array_unique($result);

echo(json_encode($result));

?>
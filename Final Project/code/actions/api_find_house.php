<?php
include_once('../includes/init.php');
include_once("../database/houses.php");

$result= array();

$word = $_GET['word'];
$city=$_GET['city'];
//$lowerPrice=$_GET['lowerPrice'];
//$upperPrice=$_GET['upperPrice'];

/*
$pool=$_POST['pool'];
$cable=$_POST['cable'];
$wifi=$_POST['wifi'];
$ac=$_POST['ac'];
$kitchen=$_POST['kitchen'];
*/
$resultCity=array();
$resultWord=array();

if(!empty($word)){
    $resultWord= findHouseByName($word);
}
if($city!= "null"){
    $resultCity=findHouseByCity($city);
}
if(!empty($resultCity) && !empty($resultWord)){
    foreach($resultCity as $a){
            if(in_array($a, $resultWord))
                array_push($result, $a);
        }
    }
    
else if($city!== "null" && empty($word))
    $result=$resultCity;
else if( $city=== "null" && !empty($word))
    $result=$resultWord;

//if(!empty($city))
//array_push($result , findHouseByCity($city));


//if(!empty($lowerPrice) && !empty($upperPrice))
//array_push($result , findHouseByPrice($lowerPrice,$upperPrice));


echo(json_encode($result));

?>
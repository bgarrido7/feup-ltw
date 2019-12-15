<?php
include_once('../includes/init.php');
include_once("../database/houses.php");

$word = $_GET['word'];
$city=$_GET['city'];
$lower=$_GET['lowerPrice'];
$upper=$_GET['upperPrice'];

$resultCity=array();
$resultWord=array();
$resultPrice=array();
$result= array();

if(!empty($word)){
    $resultWord= findHouseByName($word);
}
if($city!= "null"){
    $resultCity=findHouseByCity($city);
}
if(!empty($lower) &&  !empty($upper)  ){
    $resultPrice=findHouseByPrice($lower, $upper);
}

//==========================combinação de filtros===========================
if(!empty($resultCity) && !empty($resultWord) && empty($resultPrice)){
    foreach($resultCity as $a){
        if(in_array($a, $resultWord))
            array_push($result, $a);
    }
}
else if(!empty($resultCity) && empty($resultWord) && !empty($resultPrice)){
    foreach($resultPrice as $a){
            if(in_array($a, $resultCity))
                array_push($result, $a);
        }
}
else if(empty($resultCity) && !empty($resultWord) && !empty($resultPrice)){
    foreach($resultPrice as $a){
            if(in_array($a, $resultWord))
                array_push($result, $a);
        }
}
/*
else if(!empty($resultCity) && !empty($resultWord) && !empty($resultPrice)){
    foreach($resultCity as $a){
        if(in_array($a, $resultWord){ 

            foreach($resultPrice as $p){
                if( in_array($p, $resultWord) ){
                    if($a['houseID']==$p['houseID'])
                        array_push($result, $p);
                }
            }
        }
}
*/
//======================só 1 filtro adicionado===========================
else if($city!== "null" && empty($word) && empty($resultPrice))
    $result=$resultCity;
else if( $city=== "null" && !empty($word) && empty($resultPrice))
    $result=$resultWord;
else if( $city=== "null" && empty($word) && !empty($resultPrice))
    $result=$resultPrice;


echo(json_encode($result));

?>
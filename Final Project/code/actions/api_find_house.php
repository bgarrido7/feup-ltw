<?php
include_once('../includes/init.php');
include_once("../database/houses.php");

$word = $_GET['filter'];
/*$city=$_POST['city'];
$lowerPrice=$_POST['lowerPrice'];
$upperPrice=$_POST['upperPrice'];

$pool=$_POST['pool'];
$cable=$_POST['cable'];
$wifi=$_POST['wifi'];
$ac=$_POST['ac'];
$kitchen=$_POST['kitchen'];
*/
 
$result = findHouseByName($word);


echo(json_encode($result));

/*

if($word != "null") 
    $cityResult = findHouseByCity($city);


if($lowerPrice != "null" && $upperPrice !="null") 
    $priceResult=findHouseByPrice($lowerPrice, $upperPrice);


if($pool != "null") 
    $poolResult = findHouseByPool();


if($cable != "null") 
    $TVResult = findHouseByTV();


if($wifi != "null") 
    $wifiResult = findHouseByWifi();


if($ac != "null") 
    $acResult = findHouseByAC();


if($kitchen != "null") 
    $kitchenResult = findHouseByKitchen();

*/

/*echo(json_encode($cityResult));
echo(json_encode($priceResult));

echo(json_encode($poolResult));
echo(json_encode($TVResult));
echo(json_encode($wifiResult));
echo(json_encode($acResult));
echo(json_encode($kitchenResult));

*/
?>
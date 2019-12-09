<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');
include_once('../database/houses.php');
include_once("../template/common/aside.php");

$houseID=$_POST['houseID'];
$name=getHouseAttributes($houseID)['name'];
$price=getHouseAttributes($houseID)['dailyPrice']; 
$desc=getHouseAttributes($houseID)['description'];

include_once("../template/dialogs/edit_house.php");
include_once("../template/common/footer.php");
?>
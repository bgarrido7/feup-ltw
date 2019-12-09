<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once('../database/rents.php');
include_once('../database/user.php');
include_once('../database/houses.php');
include_once("../template/common/aside.php");

include_once("../template/titles/rents.php");

$oldRow=0;
$oldRent=0;
$owner=getID($_SESSION['email'])['userID'];

foreach(getOwnerHouses($owner) as $row){

    if($row['houseID']==$oldRow)
        continue;

    foreach(getHouseID() as $rents){

        if($rents['houseID']==$row['houseID']){

            if($rents['houseID']==$oldRent)
                continue;

            $houseName= getHouseAttributes($rents['houseID'])['name']; 
            
            foreach(  getHouseTourists($rents['houseID']) as $guest){
                $guestName= getName($guest['touristID']);
                $arriveDate=$guest['arriveDate']; 
                $stayLenght= $guest['stayLength']; 
    
                include("../template/content/list_rents.php");
            }
            $oldRent=$rents['houseID'];
        }
    }
    $oldRow=$row['houseID'];
}

include_once("../template/common/footer.php");


?>
<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');
include_once('../database/houses.php');
include_once('../database/user.php');
include_once('../database/rents.php');
include_once("../template/common/aside.php");

$houseID = $_POST['id'];
$ownerID=getOwner($houseID)['userID'];

$owner= getName($ownerID);
$age= getAge($ownerID);

$houseName= getHouseAttributes($houseID)['name'];
$local=getHouseAttributes($houseID)['location'];
$price= getHouseAttributes($houseID)['dailyPrice'];
$desc= getHouseAttributes($houseID)['description'];
$pool= getHouseAttributes($houseID)['pool'];
$cable= getHouseAttributes($houseID)['cableTV'];
$wifi=getHouseAttributes($houseID)['Wifi'];
$ac= getHouseAttributes($houseID)['AC'];
$kitchen= getHouseAttributes($houseID)['kitchen'];

$guestID = getID($_SESSION['email'])['userID'];

include_once("../template/content/house.php");

    if(strcmp($guestID, $ownerID) !== 0){

        $dates=getHouseTourists($houseID);
        echo nl2br("\n\ndates already rented for this house: \n");

        foreach($dates as $index){
            $arrival=($index['arriveDate']); 
            $departure=(  date( "Y-m-d" , (strtotime($index['arriveDate']))  +  ($index['stayLength']) *(24*60*60) ) );
            include("../template/dialogs/rent_dates.php");

        }
        include_once("../template/dialogs/rent_house.php");

    }
include_once('../template/common/footer.php');
?>
<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once('../database/rents.php');
include_once('../database/user.php');
include_once('../database/houses.php');
include_once("../template/common/aside.php");
include_once("../template/titles/reservations.php");

$touristID=getID($_SESSION['email'])['userID'];

foreach(getTouristStays($touristID) as $row){
  
    $houseName=getHouseAttributes($row['houseID'])['name'];
    $arriveDate=$row['arriveDate'];
    $stayLenght=$row['stayLength'];

    include("../template/content/list_reserv.php");
}
?>
</div>
<?php

include_once("../template/common/footer.php");


?>
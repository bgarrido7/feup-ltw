<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once('../database/rents.php');
include_once('../database/user.php');
include_once('../database/houses.php');
include_once("../template/common/aside.php");
include_once("../template/content/myReserv.php");

$touristID=getID($_SESSION['email'])['userID'];
    foreach(getTouristStays($touristID) as $row){
      
       // echo nl2br("\n\n");
        $houseName=getHouseAttributes($row['houseID'])['name'];
       // echo nl2br("\narrival date: ");
        $arriveDate=$row['arriveDate'];
       // echo nl2br("\nstay length: ");
        $stayLenght=$row['stayLength'];
      //  echo(" days");
        ?>
    
    <?php

include("../template/content/listReserv.php");

   }
include_once("../template/common/footer.php");


?>
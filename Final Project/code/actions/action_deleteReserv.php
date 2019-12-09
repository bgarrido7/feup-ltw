<?php

include_once('../includes/init.php');
include_once('../database/rents.php');

$touristID=$_POST['touristID'];
$arrival=$_POST['arrival'];

deteleRent($touristID, $arrival);

if($_POST['owner']){
 header('Location:  ../pages/myRents.php');

}else{
header('Location:  ../pages/myReservations.php');

}
?>
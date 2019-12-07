<?php
include_once('../includes/init.php');
include_once('../database/houses.php');

    $houseID=$_POST['houseID'];
    $name=$_POST['name']; 
    $locat=$_POST['city'];
    $price=$_POST['price'];
    $desc=$_POST['desc']; 

  //  $houseID=$_POST['houseID'];

    echo $houseID;

//editHouse($newTitle,$newDescription, $houseID)

  ?>
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

    if($name!=null){
      if(updateUserInfo(getID($email), $name)){
          setCurrentUser(getID($email),$email);
          echo "profile updated with sucess";
     
      }
      else
          echo "error updating profile";
  }
//editHouse($newTitle,$newDescription, $houseID)

  ?>
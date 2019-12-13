<?php
include_once('../includes/init.php');
include_once('../database/rents.php');

$houseID=$_POST['houseID'];

  $init=$_POST['init'];
  $end=$_POST['end'];
  $touristID=$_POST['touristID'];
  $booked=0;

  $datetime1 = strtotime(date('Y-m-d', strtotime($init)));
  $datetime2 = strtotime(date('Y-m-d', strtotime($end )));

  //só conta em dias
  $stayLength = ($datetime2 - $datetime1) /(24*60*60); //para tirar as horas e minutos 
  
  foreach(getHouseTourists($houseID) as $dates){

    $bookedBegin=strtotime($dates['arriveDate']);
    $bookedEnd=( $bookedBegin + ($dates['stayLength']) *(24*60*60) );

    if( (strtotime($init) >= $bookedBegin) &&  (strtotime($init )<=$bookedEnd)  
      || (strtotime($end) >= $bookedBegin) &&  (strtotime($end )<=$bookedEnd) )

        $booked=1;
  }
  
  if(strcmp($init,$end)>=0){
    $_SESSION['error']="departure date must be after arrival date";
    $_SESSION['houseID']=$houseID;
    header('Location:  ../pages/house.php' );
  }

else if($booked){
  $_SESSION['error']="dates already booked";
  $_SESSION['houseID']=$houseID;
  header('Location:  ../pages/house.php');


  }
  else {
    unset( $_SESSION['error']);
    addDates($touristID, $houseID, $init, $stayLength) ;
    header('Location:  ../pages/myReservations.php');

  }

?>
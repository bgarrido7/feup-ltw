<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once('../database/rents.php');
include_once('../database/user.php');
include_once('../database/houses.php');


echo nl2br ("my reservations:\n");
$touristID=getID($_SESSION['email'])['userID'];

    foreach(getTouristStays($touristID) as $row){
      
        echo nl2br("\n\n");
        print_r(getHouseAttributes($row['houseID'])['name']);
        echo nl2br("\narrival date: ");
        print_r($row['arriveDate']);
        echo nl2br("\nstay length: ");
        print_r($row['stayLength']);
        echo(" days");
        ?>
        <form action='../actions/action_deleteReserv.php' method="post">
        <input type="hidden" name="owner">
      <input type="hidden" name="houseID" value="<?php echo $touristID; ?>">
      <input type="hidden" name="arrival" value="<?php echo $row['arriveDate']; ?>">
      <input type="submit" name="submit" value="Delete Reservation">
      </form>
    <?php
   }

?>
</br>
<a href="homepage.php">homepage</a>
<?php

include_once("../template/common/footer.php");


?>
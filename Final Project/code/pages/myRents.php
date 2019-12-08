<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once('../database/rents.php');
include_once('../database/user.php');
include_once('../database/houses.php');

echo nl2br ("my rented houses:\n");
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

                echo nl2br("-----------------------------------------------------------------------------------------\nNAME: ");
                echo getHouseAttributes($rents['houseID'])['name']; //dá bem
                
                
                
                foreach(  getHouseTourists($rents['houseID']) as $guest){
                        echo nl2br("\n\nhospede: ");
                        getName($guest['touristID']);
                        echo nl2br("\narrival date: ");
                        echo $guest['arriveDate']; 
                        echo nl2br("\nstay lenght: ");
                        echo $guest['stayLength']; 
            

                        ?>
                        <form action='../actions/action_deleteReserv.php' method="post">
                        <input type="hidden" name="owner" value="<?php echo "1"?>">
                        <input type="hidden" name="touristID" value="<?php echo $guest['touristID']; ?>">
                        <input type="hidden" name="arrival" value="<?php echo $guest['arriveDate'];  ?>">
                        <input type="submit" name="submit" value="Delete Reservation">
                        </form>
                    <?php
                }
                $oldRent=$rents['houseID'];
            }
        }
        $oldRow=$row['houseID'];
    }
 
?>
</br>
<a href="homepage.php">homepage</a>
<?php

include_once("../template/common/footer.php");


?>
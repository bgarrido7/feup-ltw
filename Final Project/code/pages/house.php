<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');
include_once('../database/houses.php');
include_once('../database/user.php');
include_once('../database/rents.php');

$houseID = $_POST['id'];
$ownerID=getOwner($houseID)['userID'];

echo "Owner: ";
getName($ownerID);
echo ", ";
echo getAge($ownerID);
echo nl2br("\n");

getHouse($houseID);

$guestID = getID($_SESSION['email'])['userID'];

    if(strcmp($guestID, $ownerID) !== 0){

        $dates=getHouseTourists($houseID);
        echo nl2br("\n\ndates already rented for this house: \n");

        foreach($dates as $index){
            echo nl2br("\nfrom ");
            print_r($index['arriveDate']); 
            echo nl2br(" to ");
            print_r(  date( "Y-m-d" , (strtotime($index['arriveDate']))  +  ($index['stayLength']) *(24*60*60) ) );
        }

        ?>
        <h1>Rent for a period of time</h1>
        <form action="../actions/action_rent.php" method="post" >
        <input type="hidden" name="houseID" value="<?php echo $houseID; ?>"/>
        <input type="hidden" name="touristID" value="<?php echo $guestID; ?>"/>
            Dates:</br>
             <input type="date" value="2019-12-17" name="init" min="2019-12-17"><br/>
            <input type="date" value="2019-12-18" name="end"  min="2019-12-18"><br/>
        <input type="submit" value="Rent"/>
</br>
        <?php
    }
    else{
        ?>
        <form action="editHouse.php" method="post" >
        <input type="hidden" name="houseID" value="<?php echo $houseID; ?>"/>
            <input type="submit" value="edit this house" />
            </form>
        <?php
    }

include_once('../template/common/footer.php');
?>
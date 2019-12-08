<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');

echo nl2br("search\n\n");
include_once('../database/houses.php');

foreach(getAllHouses() as $house){

    echo nl2br ("\n\n---------------------------------------------------\nname: ");
    echo $house['name'];
    echo nl2br ("\nlocation: ");
    echo $house['location'];
    echo nl2br ("\nprice per day: ");
    echo $house['dailyPrice'];
    echo nl2br ("\ndescription: ");
    echo $house['description'];
    echo nl2br ("\npool: ");
    echo $house['pool'];
    echo nl2br ("\ncableTV: ");
    echo $house['cableTV'];
    echo nl2br ("\nWifi: ");
    echo $house['Wifi'];
    echo nl2br ("\nAC: ");
    echo $house['AC'];
    echo nl2br ("\nkitchen: ");
    echo $house['kitchen'];
    ?>
    <form action="house.php" method="post" >
    <input type="hidden" name="id" value="<?php echo $house['houseID']; ?>"/>
    <input type="submit" value="see this house's page" />
    </form>
<?php
}


include_once("../template/common/footer.php");
?>


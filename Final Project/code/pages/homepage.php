<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once("../template/common/aside.php");
include_once('../database/user.php');
include_once('../database/houses.php');

$userID = getID($_SESSION['email'])['userID'];
$name = getName($userID);

include_once('../template/common/homepage.php');

foreach(findHouseByName("snow") as $house){

    $houseID= $house['houseID'];
    $houseName= $house['name'];
    $local=$house['location'];
    $price= $house['dailyPrice'];
    $desc= $house['description'];

    $pool= ($house['pool'] ==1 ? "yes" : "no");
    $cable= ($house['cableTV'] ==1 ? "yes" : "no");
    $wifi=($house['Wifi'] ==1 ? "yes" : "no");
    $ac= ($house['AC'] ==1 ? "yes" : "no");
    $kitchen= ($house['kitchen'] ==1 ? "yes" : "no");


include("../template/content/list_search_houses.php");

}
?>
</div>

<?php
include_once("../template/common/footer.php");
?>



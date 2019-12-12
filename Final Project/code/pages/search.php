<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');

include_once("../template/common/aside.php");
include_once('../database/houses.php');
include_once("../template/titles/search.php");
?>
<div>
<?php

foreach(getAllHouses() as $house){

    $houseID= $house['houseID'];
    $houseName= $house['name'];
    $local=$house['location'];
    $price= $house['dailyPrice'];
    $desc= $house['description'];
    $pool= $house['pool'];
    $cable= $house['cableTV'];
    $wifi=$house['Wifi'];
    $ac= $house['AC'];
    $kitchen= $house['kitchen'];


include("../template/content/list_all_houses.php");

}
?>
</div>

<?php

include_once("../template/common/footer.php");
?>


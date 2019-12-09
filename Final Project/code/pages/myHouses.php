
<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');
include_once('../database/houses.php');
include_once('../database/user.php');
include_once("../template/common/aside.php");
include_once("../template/titles/myHouses.php");

    //imprimir as casas deste owner
    $userID=getID($_SESSION['email'])['userID'];
    $housearray=getOwnerHouses($userID);
    foreach($housearray as $index){
        $houseID= $index['houseID'];     

        $houseName= getHouseAttributes($houseID)['name'];
        $local=getHouseAttributes($houseID)['location'];
        $price= getHouseAttributes($houseID)['dailyPrice'];
        $desc= getHouseAttributes($houseID)['description'];
        $pool= getHouseAttributes($houseID)['pool'];
        $cable= getHouseAttributes($houseID)['cableTV'];
        $wifi=getHouseAttributes($houseID)['Wifi'];
        $ac= getHouseAttributes($houseID)['AC'];
        $kitchen= getHouseAttributes($houseID)['kitchen'];
        
     include("../template/content/list_houses.php");

    }

    include_once("../template/common/footer.php");
?>

<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');
include_once('../database/houses.php');
include_once('../database/user.php');

echo nl2br("my houses \n");

//imprimir as casas deste owner
$userID=getID($_SESSION['email']);
$housearray=getOwnerHouses($userID);
foreach($housearray as $index){
    getHouse($index['houseID']);
}

?>
</br>
<a href="addHouse.php">

<input type="button" value="Add New House"/>
</a>

<?php

include_once("../template/common/footer.php");

?>
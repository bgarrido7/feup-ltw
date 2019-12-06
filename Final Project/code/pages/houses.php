<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');
include_once('../database/houses.php');
include_once('../database/user.php');

echo nl2br("my houses \n");
$row=0;
//imprimir as casas deste owner
$userID=getID($_SESSION['email']);
if(getOwnerHouses($userID)!=null)
$row=(getOwnerHouses($userID)[0]['houseID']);

if($row!=null)
    getHouse($row);

?>
</br>
<a href="addHouse.php">

<input type="button" value="Add New House"/>
<?php
include_once("../template/common/footer.php");

?>
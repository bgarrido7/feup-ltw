<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');
include_once('../database/houses.php');
include_once('../database/user.php');

echo "my houses";

//imprimir as casas deste owner

//getOwner retorna array, getHouse quer só 1 valor, fazer loop maybe?
print getHouse(getOwnerHouses(getID($_SESSION['email'])));

?>
</br>
<a href="addHouse.php">

<input type="button" value="Add New House"/>
<?php
include_once("../template/common/footer.php");

?>
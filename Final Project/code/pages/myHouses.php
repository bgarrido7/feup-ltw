
<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');
include_once('../database/houses.php');
include_once('../database/user.php');
include_once("../template/common/aside.php");

echo nl2br("my houses \n");
?>
<input type="button" value="add new house" onclick="location='addHouse.php'" />
</br>
    <?php
    //imprimir as casas deste owner
    $userID=getID($_SESSION['email'])['userID'];
    $housearray=getOwnerHouses($userID);
    foreach($housearray as $index){
            
        getHouse($index['houseID']);

        ?>
      
        <form action="house.php" method="post" >
        <input type="hidden" name="id" value="<?php echo $index['houseID']; ?>"/>
            <input type="submit" value="see this house's page" />
            </form>
        </br>
            <form action="editHouse.php" method="post" >
        <input type="hidden" name="houseID" value="<?php echo $index['houseID']; ?>"/>
            <input type="submit" value="edit this house" />
            </form>
        <?php
    }

    echo nl2br("\n\n\n\n");
    include_once("../template/common/footer.php");
?>

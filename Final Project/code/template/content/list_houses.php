
<div id="myHouses">

<p>name: <?php echo htmlentities($houseName);  ?></p>
<p>location: <?php echo htmlentities($local);  ?></p>
<p>price per day: <?php echo htmlentities($price);  ?></p>
<p>description: <?php echo htmlentities($desc);  ?></p>
<p>has pool? <?php echo htmlentities($pool);  ?></p>
<p>cable TV? <?php echo htmlentities($cable);  ?></p>
<p>wifi? <?php echo htmlentities($wifi);  ?></p>
<p>AC? <?php echo htmlentities($ac);  ?></p>
<p>kitchen? <?php echo htmlentities($kitchen);  ?></p>

<form action="house.php" method="post" >
    <input type="hidden" name="id" value="<?php echo htmlentities($houseID); ?>"/>
    <input type="submit" value="see this house's page" id="visit"/>
</form>
    </br></br>
<form action="editHouse.php" method="post" >
    <input type="hidden" name="houseID" value="<?php echo htmlentities($houseID); ?>"/>
    <input type="submit" value="edit this house" id="edit"/>
</form>

</div>

<div id="myHouses">

<p>Name: <?php echo htmlentities($houseName);  ?></p>
<p>Location: <?php echo htmlentities($local);  ?></p>
<p>Price per day: <?php echo htmlentities($price);  ?></p>
<p>Description: <?php echo htmlentities($desc);  ?></p>
<li>has pool? <?php echo htmlentities($pool);  ?></li>
<li>cable TV? <?php echo htmlentities($cable);  ?></li>
<li>wifi? <?php echo htmlentities($wifi);  ?></li>
<li>AC? <?php echo htmlentities($ac);  ?></li>
<li>kitchen? <?php echo htmlentities($kitchen);  ?></li>

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


<div id="lists">

    <h3>Name: <?php echo htmlentities($houseName);  ?></h3>
    <p>Location: <?php echo htmlentities($local);  ?></p>
    <p>Price per day: <?php echo htmlentities($price);  ?>$ /day</p>
    <p>Description: <?php echo htmlentities($desc);  ?></p>

    <li>has pool? <?php echo htmlentities($pool);  ?></li>
    <li>cable TV? <?php echo htmlentities($cable);  ?></li>
    <li>wifi? <?php echo htmlentities($wifi);  ?></li>
    <li>AC? <?php echo htmlentities($ac);  ?></li>
    <li>kitchen? <?php echo htmlentities($kitchen);  ?></li>


    <form action="../pages/house.php" method="get" >
    <input type="hidden" name="id" value="<?php echo htmlentities($houseID); ?>"/>
    <input type="submit" value="see this house's page" />
    </form>

</div>


<h3> <?php echo htmlentities($houseName);  ?></h3>

<p>guest: <?php echo htmlentities($guestName);  ?></p>

<p>arrival date: <?php echo htmlentities($arriveDate);  ?></p>
<p>stay length: <?php echo htmlentities($stayLenght);  ?> days </p>


<form action='../actions/action_deleteReserv.php' method="post">
<input type="hidden" name="owner" value="<?php echo "1"?>">
<input type="hidden" name="touristID" value="<?php echo $guest['touristID']; ?>">
<input type="hidden" name="arrival" value="<?php echo $guest['arriveDate'];  ?>">
<input type="submit" name="submit" value="Delete Reservation">
</form>



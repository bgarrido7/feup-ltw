</div>
</br>
<h1>Rent for a period of time</h1>
<form action="../actions/action_rent.php" method="post" >
<input type="hidden" name="houseID" value="<?php echo $houseID; ?>"/>
<input type="hidden" name="touristID" value="<?php echo $guestID; ?>"/>
Dates:</br></br>
<input type="date" value="2019-12-17" name="init" min="2019-12-17"><br/></br>
<input type="date" value="2019-12-18" name="end"  min="2019-12-18"><br/></br>
<input type="submit" value="Rent"/>
</br>

<div id="error">
<?php if(isset($_SESSION['error'])) echo htmlentities($_SESSION['error']); unset($_SESSION['error'])?>
</div>


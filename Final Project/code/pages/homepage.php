<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once('../database/user.php');
include_once('../template/common/header.php');
?>

  <p>Welcome 
<?php
getName(getID($_SESSION['email'])['userID']);
?>!</br>

<div>
  <ul><a href="search.php">Search Houses</a></ul>
  <ul><a href="myReservations.php">Reservations</a></ul>
  <ul><a href="myHouses.php">My Houses</a></ul>
  <ul><a href="myRents.php">My Rented Houses</a></ul>
  <ul><a href="error.php">Whishlist</a></ul>
  <ul><a href="profile.php">My Profile</a></ul>
</div>

<a href="../actions/action_logout.php">logout</a>

<?php
include_once("../template/common/footer.php");
?>
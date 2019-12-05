<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once('../database/user.php');
include_once('../template/common/header.php');
?>

  <p>Welcome 
<?php
getUserName(($_SESSION['email']));
?>!</br>

<div>
  <ul><a href="search.php">Search Houses</a></ul>
  <ul><a href="myRents.php">Rented Houses</a></ul>
  <ul><a href="houses.php">My Houses</a></ul>
  <ul><a href="error.php">Messages</a></ul>
  <ul><a href="whishlist.php">Whishlist</a></ul>
  <ul><a href="profile.php">My Profile</a></ul>
</div>

<a href="../actions/action_logout.php">logout</a>

<?php
include_once("../template/common/footer.php");
?>
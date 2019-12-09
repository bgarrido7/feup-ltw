<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once('../database/user.php');
?>

  <h1>Welcome 
<?php
getName(getID($_SESSION['email'])['userID']);
?>
!</h1>

<?php
include_once("../template/common/aside.php");
include_once("../template/common/footer.php");
?>
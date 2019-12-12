<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once('../database/user.php');

$userID= getID($_SESSION['email'])['userID'];
$name=getName($userID);

include_once("../template/common/aside.php");
include_once('../template/common/homepage.php');
include_once("../template/common/footer.php");
?>



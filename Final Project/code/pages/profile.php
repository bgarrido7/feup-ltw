<?php
include_once('../includes/init.php');
include_once('../template/common/header.php');
include_once('../database/user.php');
include_once('../template/common/header.php');
include_once("../template/common/aside.php");

$userID=getID($_SESSION['email'])['userID'];
$name=getName($userID);
$age=getAge($userID);
$bday=getBirthday($_SESSION['email'])['birthday']; 

include_once("../template/profile/account.php");
include_once("../template/common/footer.php");

?>
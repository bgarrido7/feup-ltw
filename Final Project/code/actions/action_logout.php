<?php
  include_once('../includes/init.php');

  session_destroy();
  $_SESSION = array();

  header ("Location: ../index.php");
?>
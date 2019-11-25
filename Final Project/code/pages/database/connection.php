<?php

try{
  $conn = new PDO('sqlite:database/create.db');
}
  catch(PDOException $conn)
{
    throw new PDOException($conn);
} 
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*  if (isset($_SESSION['error_message'])) {
    $_ERROR_MESSAGE = $_SESSION['error_message']; 
    unset($_SESSION['error_message']);
  }
  if (isset($_SESSION['success_message'])) {
    $_SUCCESS_MESSAGE = $_SESSION['success_message']; 
    unset($_SESSION['success_message']);
  }
  if (isset($_SESSION['form_values'])) {
    $_FORM_VALUES = $_SESSION['form_values']; 
    unset($_SESSION['form_values']);
  }*/
?>
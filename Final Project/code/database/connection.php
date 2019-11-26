<?php
  $conn = new PDO('sqlite:database/site.db');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//=========================================================================
/*===========================cenas des sibd================================
//=========================================================================
if(!isset($_SESSION)){
    session_save_path('./session');
    session_start();
}
try{
  $conn = new PDO('pgsql:host=dbm.fe.up.pt;port=5432;dbname=sibd1807', 'sibd1807', 'diogo');
}
  catch(PDOException $conn)
{
    throw new PDOException($conn);
} 
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->query("SET SCHEMA 'STradeL'");
  if (isset($_SESSION['error_message'])) {
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
  }
//=========================================================================
//=========================================================================
//=========================================================================
*/
?>

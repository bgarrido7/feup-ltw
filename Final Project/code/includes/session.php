<?php
  session_start();


  function setCurrentUser($userID, $email) {
    $_SESSION['email'] = $email;
    $_SESSION['userID'] = $userID;
}

?>

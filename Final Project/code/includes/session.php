<?php
  session_start();
 
 
  function setCurrentUser($email) {
    $_SESSION['email'] = $email;
}


  //==============código da sofia ==============
/*
  function setCurrentUser($userID, $name) {
    $_SESSION['name'] = $name;
    $_SESSION['userID'] = $userID;
}

function getUserID() {
   if(isset($_SESSION['userID'])) {
        return $_SESSION['userID'];
   } else {
       return null;
   }
}
function getUsername() {
    if(isset($_SESSION['name'])) {
        return $_SESSION['name'];
    } else {
        return null;
    }
}
*/
//===============================================
?>

<?php
//funciona mas tem bug
function createUser($name, $pword, $bday, $email) {
    $pwordhashed = hash('sha256', $pword);
    global $dbh;
    try {
  	  $stmt = $dbh->prepare('INSERT INTO Users(name, password, birthday, email) VALUES (:name,:password,:birthday,:email)');
  	  $stmt->bindParam(':name', $name);
  	  $stmt->bindParam(':password', $pwordhashed);
  	  $stmt->bindParam(':birthday', $bday);
      $stmt->bindParam(':email', $email);
      
      if($stmt->execute()){ //isto é sempre false idk why mas dados ficam gravados na db
        return getID($email);
      }
      else{
        return -1;
      }
  }
  catch(PDOException $e) { 
      return -1;
    }
} 
//======================================================
//funciona mas tem bug
function isLoginCorrect($email, $pword) {
  global $dbh;

  try {
    $stmt = $dbh->prepare('SELECT * FROM Users WHERE email = ? AND password = ?');
    $stmt->execute(array($email,  hash('sha256', $pword)));

    if($stmt->fetch() !== false) { //isto é sempre true idk why
      return 1;
      //return getID($username);
    }
    else return -1;
  } 
  catch(PDOException $e) {
    return -1;
  }
}
//======================================================


  function getID($email) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('SELECT ID FROM Users WHERE email = ?');
      $stmt->execute(array($email));
      if($row = $stmt->fetch()){
        return $row['userID'];
      }
    
    }catch(PDOException $e) {
      return -1;
    }
  }
/*
function PasswordsMatch($name, $pword) {
    global $dbh;
    $passwordhashed = hash('sha256', $pword);
    try {
      $stmt = $dbh->prepare('SELECT * FROM user WHERE Username = ? AND Password = ?');
      $stmt->execute(array($username, $passwordhashed));
      if($stmt->fetch() !== false) {
        return getID($username);
      }
      else return -1;
    } catch(PDOException $e) {
      return -1;
    }
  }

function duplicateEmail($email) {
        global $dbh;
        try {
          $stmt = $dbh->prepare('SELECT ID FROM User WHERE email = ?');
          $stmt->execute(array($email));
          return $stmt->fetch()  !== false;
        
        }catch(PDOException $e) {
          return true;
        }
}
*/
    ?>
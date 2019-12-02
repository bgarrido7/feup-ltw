<?php

function PasswordsMatch($username, $password) {
    global $dbh;
    $passwordhashed = hash('sha256', $password);
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
  function getID($name) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('SELECT ID FROM Users WHERE name = ?');
      $stmt->execute(array($name));
      if($row = $stmt->fetch()){
        return $row['userID'];
      }
    
    }catch(PDOException $e) {
      return -1;
    }
  }

function createUser($name, $pword, $bday, $email) {
    $pwordhashed = hash('sha256', $pword);
    global $dbh;
    try {
  	  $stmt = $dbh->prepare('INSERT INTO Users(name, password, birthday, email) VALUES (:name,:password,:birthday,:email)');
  	  $stmt->bindParam(':name', $name);
  	  $stmt->bindParam(':password', $pwordhashed);
  	  $stmt->bindParam(':birthday', $bday);
        $stmt->bindParam(':email', $email);
      
        
      if($stmt->execute()){
        $id = getID($name);
        return $id;

      }
      else{
        return -1;
      }
  }
  catch(PDOException $e) {
      
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

    ?>
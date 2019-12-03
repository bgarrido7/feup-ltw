<?php
function createUser($name, $pword, $bday, $email) {
    $pwordhashed = hash('sha256', $pword);   
    global $dbh;
  	  $stmt = $dbh->prepare('INSERT INTO Users(name, password, birthday, email) VALUES (:name,:password,:birthday,:email)');
  	  $stmt->bindParam(':name', $name);
  	  $stmt->bindParam(':password', $pwordhashed);
  	  $stmt->bindParam(':birthday', $bday);
      $stmt->bindParam(':email', $email);
      $result = $stmt->execute();

      if($result){ 
        getID($email);
      }
      else{
        return -1;
      }
    
  }
 
//} 
//======================================================
function isLoginCorrect($email, $pword) {
  global $dbh;
  $pwordhashed = hash('sha256', $pword);   

    $stmt = $dbh->prepare('SELECT * FROM Users WHERE email = ? AND name = ?');
    $stmt->execute(array($email, $pword));   
  //  $result = $stmt->fetch();
    return $stmt->fetch() !== false;
    /*    if($result === false){ //nao encontrou user
        return -1;
    }
    else 
      return getID($email);
*/
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
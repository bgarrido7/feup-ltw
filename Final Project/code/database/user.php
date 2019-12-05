<?php
function createUser($name, $email, $pword, $repeatPword, $bday) {
    $pwordhashed = hash('sha256', $pword);   
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM Users WHERE email = ? ');
    $stmt->execute(array($email));
    $user=$stmt->fetch();

    if(strpos ($email,'@gmail.com')===false)
      return -2;

    if($user!==false)
      return -3;
    if(strcmp($pword,$repeatPword))
      return -4;

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
  $passwordhashed = hash('sha256', $pword);
  
  $stmt = $dbh->prepare('SELECT * FROM Users WHERE email = ? ');
    $stmt->execute(array($email));
    $user=$stmt->fetch();
 
   $result = strcmp($user['password'], $passwordhashed);
    if($user!==false){
      if(!$result)
        return 1;
      else
        return 0;
    }
    else
      return -1;
     /* 
    if($stmt->fetch() !== false) {
      return getID($email);
    }
    else return -1;

    /*--------------------------------------------------------*/
    /*
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));
    $user = $stmt->fetch();
    return $user !== false && password_verify($password, $user['password']);*/
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
  function getUserName($email) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('SELECT ID FROM Users WHERE email = ?');
      $stmt->execute(array($email));
      if($row = $stmt->fetch()){
        return $row['name'];
      }
    
    }catch(PDOException $e) {
      return -1;
    }
  }*/



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
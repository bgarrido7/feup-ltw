<?php
function createUser($name, $email, $pword, $repeatPword, $bday) {
    $pwordhashed = hash('sha256', $pword);   
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM Users WHERE email = ? ');
    $stmt->execute(array($email));
    $user=$stmt->fetch();

    if(strpos ($email,'@gmail.com')===false) //email not valid
      return -2;

    if($user!==false) //user already exists
      return -3;
    if(strcmp($pword,$repeatPword)) //passowrds don't match
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
  //======================================================
  function getUser($email) {
    global $dbh;
      $stmt = $dbh->prepare('SELECT name FROM Users WHERE email= ?');
      $stmt->execute(array($email));
      return $stmt->fetch();
    }
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
        return 1;//getID($email); 
      else
        return 0;
    }
    else
      return -1;
}
//======================================================

function getName($email) {
  global $dbh; 
  $stmt = $dbh->prepare('SELECT * FROM Users WHERE email = ? ');
    $stmt->execute(array($email));
    $user=$stmt->fetch();
 
   echo $user['name'];
}
//======================================================
function getID($email) {
  global $dbh;
    $stmt = $dbh->prepare('SELECT userID FROM Users WHERE email = ?');
    $stmt->execute(array($email));
    if($row = $stmt->fetch()){
      return $row['userID'];
    }
  
    
}

//======================================================
function updateUserInfo($userID, $name){
  global $dbh;
  $stmt = $dbh->prepare('UPDATE Users SET name = ? WHERE userID = ?');
  $result = $stmt->execute(array($name, $userID));  
  if($result)
      return true;
  else{
    return false;
  }   
}
//======================================================
function updatePassword($userID ,$pword){
  $passwordhashed = hash('sha256', $pword);
  global $dbh;

  $stmt = $dbh->prepare('UPDATE Users SET password = :pword WHERE userID = :ID');
  $stmt->bindParam(':pword', $passwordhashed);
  $stmt->bindParam(':ID', $userID);

 // $stmt->bindParam(':pword', $passwordhashed, PDO::PARAM_STR); //conde
  $result=$stmt->execute();
  if($result)
      return true;
  else{
    return false;
  }  
} 

//======================================================

/*-------------------for future implementation---------------------------
function updateUserPhoto($userID, $photoPath) {
  global $dbh;
  try {
    $stmt = $dbh->prepare('UPDATE User SET Photo = ? WHERE ID = ?');
    if($stmt->execute(array($photoPath, $userID)))
        return true;
    else
        return false;
  }catch(PDOException $e) {
    return false;
  }
} 

function getUserPhoto($userID) {
  global $dbh;
  try {
    $stmt = $dbh->prepare('SELECT Photo FROM User WHERE ID = ?');
    $stmt->execute(array($userID));
    return $stmt->fetch();
  
  }catch(PDOException $e) {
    return null;
  }
}
---------------------------------------------------------------------------*/
?>
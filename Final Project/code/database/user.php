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
    if(strcmp($pword,$repeatPword)) //passwords don't match
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

function getName($id) {
  global $dbh; 
  $stmt = $dbh->prepare('SELECT * FROM Users WHERE userID = ? ');
    $stmt->execute(array($id));
    $user=$stmt->fetch();
   echo $user['name'];
}
//======================================================
function getID($email) {
  global $dbh;
    $stmt = $dbh->prepare('SELECT userID FROM Users WHERE email = ?');
    $stmt->execute(array($email));
    return $stmt->fetch();
 }
 //======================================================

 function getBirthday($email) {
  global $dbh;
  $stmt = $dbh->prepare('SELECT birthday FROM Users WHERE email = ?');
  $stmt->execute(array($email));
  return  $stmt->fetch();
 }
//======================================================

 function getAge($id) {
  global $dbh;
  $stmt = $dbh->prepare('SELECT birthday FROM Users WHERE userID = ?');
  $stmt->execute(array($id));
  $result= $stmt->fetch();
  return (2019 - date('Y',strtotime($result['birthday'])));
 }
//======================================================

 function updateBday($id, $bday){
  global $dbh;
  $stmt = $dbh->prepare('UPDATE Users SET birthday = :bday WHERE userID = :ID');
  $stmt->bindParam(':bday', $bday);
  $stmt->bindParam(':ID', $id);

  $result=$stmt->execute();
  if($result)
      return true;
  else
    return false;
 }
//======================================================
function updateUserInfo($userID, $name){
  global $dbh;
  $stmt = $dbh->prepare('UPDATE Users SET name = :name WHERE userID = :ID');
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':ID', $userID);

  $result=$stmt->execute();
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

  $result=$stmt->execute();
  if($result)
      return true;
  else{
    return false;
  }  
} 

//======================================================

//-------------------for future implementation---------------------------

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
//======================================================
function setUserPhoto($userID, $photoPath) {
  global $dbh;
  try {
    $stmt = $dbh->prepare('INSERT INTO UserPicture(userID,pictureID) VALUE(:id, :photo)');
    $stmt->bindParam(':id', $userID);
    $stmt->bindParam(':photo', $photoPath);

    return $stmt->execute();
  
  }catch(PDOException $e) {
    return null;
  }
}
//---------------------------------------------------------------------------
?>
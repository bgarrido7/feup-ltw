<?php

function addHouse($userID,$name,$location,$price,$desc,$pool,$cable, $wifi, $ac, $kitchen){
    global $dbh;
    
    $stmt = $dbh->prepare('INSERT INTO Houses(name, location, dailyPrice, description, pool, cableTV, Wifi, AC, kitchen) VALUES (:name,:location,:price,:desc, :pool, :cable, :wifi, :ac, :kitchen)');
   
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':desc', $desc);

    $stmt->bindParam(':pool', $pool);
    $stmt->bindParam(':cable', $cable);
    $stmt->bindParam(':wifi', $wifi);
    $stmt->bindParam(':ac', $ac);
    $stmt->bindParam(':kitchen', $kitchen);

    if($stmt->execute()){
        $houseID = $dbh->lastInsertId();
    }else{
      return -1;
    }
    if(addOwner($userID, $houseID)){
        return $houseID;
    }else{
      return -1;
}}
//======================================================

function addOwner($userID, $houseID) {
    global $dbh;
    try {
        $stmt = $dbh->prepare('INSERT INTO Owners(userID, houseID) VALUES(:userID, :houseID)');
        $stmt->bindParam(':userID', $userID);
        $stmt->bindParam(':houseID', $houseID);
     
        if($stmt->execute())
            return true;
        else
            return false;
    } catch(PDOException $e) {
        return false;
    }
}
//======================================================

function getAllHouses() {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Houses');
    $stmt->execute();
    return $stmt->fetchAll();
}

//======================================================

function getHouseAttributes($houseID) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Houses WHERE houseID = ?');
    $stmt->execute(array($houseID));
    $house = $stmt->fetch();

    $house['pool'] = ($house['pool'] ? 'YES' : 'NO');
    $house['cableTV'] = ($house['cableTV'] ? 'YES' : 'NO');
    $house['Wifi'] = ($house['Wifi'] ? 'YES' : 'NO');
    $house['AC'] = ($house['AC'] ? 'YES' : 'NO');    
    $house['kitchen'] = ($house['kitchen'] ? 'YES' : 'NO');
    
    return $house;
}
//======================================================
function getOwnerHouses($userID) {
    global $dbh;
    try {
        $stmt = $dbh->prepare('SELECT houseID FROM Owners WHERE userID = ?');
        $stmt->execute(array($userID));
        return $stmt->fetchAll();

    }catch(PDOException $e) {
        return null;
    }
}

//======================================================

function getOwner($houseID) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT userID FROM Owners WHERE houseID = ?');
    $stmt->execute(array($houseID));
    return $stmt->fetch();
}
//======================================================

function editHouse($newTitle,$newDescription, $houseID, $price, $location , $pool, $cable, $wifi, $ac, $kitchen){
    global $dbh;

    $stmt = $dbh->prepare('UPDATE Houses SET name = :name ,description=:desc, dailyPrice=:price,location=:local, pool = :pool ,cableTV=:cable, Wifi=:wifi,AC=:ac , kitchen=:kitchen   WHERE houseID = :id');
    $stmt->bindParam(':name', $newTitle);
    $stmt->bindParam(':desc', $newDescription);
    $stmt->bindParam(':id', $houseID);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':local', $location);
    
    $stmt->bindParam(':pool', $pool);
    $stmt->bindParam(':cable', $cable);
    $stmt->bindParam(':wifi', $wifi);
    $stmt->bindParam(':ac', $ac);
    $stmt->bindParam(':kitchen', $kitchen);

    $result=$stmt->execute();

}
//======================================================
function setHousePhoto($houseID, $photoPath) {
    global $dbh;
    try {
      $stmt = $dbh->prepare('INSERT INTO HousePicture(houseID,HousePicID) VALUE(:id, :photo)');
      $stmt->bindParam(':id', $houseID);
      $stmt->bindParam(':photo', $photoPath);
  
      return $stmt->execute();
    
    }catch(PDOException $e) {
      return null;
    }
  }
//=====================================================
//=======================search by=====================
//=====================================================

function findHouseByName($word){
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Houses WHERE name LIKE lower(?) OR description LIKE LOWER(?)');
    
    $stmt->execute(array("%$word%", "%$word%"));
    return $stmt->fetchAll();

}
//======================================================

function findHouseByPrice($lower, $upper){
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Houses WHERE dailyPrice BETWEEN ? AND ?');
    
    $stmt->execute(array($lower, $upper));
    return $stmt->fetchAll();

}
 //======================================================
function findHouseByCity($city){

    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Houses WHERE location=?');
    
    $stmt->execute(array($city));
    return $stmt->fetchAll();
 }
//======================================================
//=====================search tags======================
//======================================================

 function findHouseByPool(){

    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Houses WHERE pool=?');
    
    $stmt->execute(array('1'));
    return $stmt->fetchAll();
 }
 //======================================================
 function findHouseByTV(){

    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Houses WHERE cableTV=?');
    
    $stmt->execute(array('1'));
    return $stmt->fetchAll();
 }
 //======================================================
 function findHouseByWifi(){

    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Houses WHERE Wifi=?');
    
    $stmt->execute(array('1'));
    return $stmt->fetchAll();
 }
 //======================================================
 function findHouseByAC(){

    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Houses WHERE AC=?');
    
    $stmt->execute(array('1'));
    return $stmt->fetchAll();
 }
 //======================================================
 function findHouseByKitchen(){

    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Houses WHERE kitchen=?');
    
    $stmt->execute(array('1'));
    return $stmt->fetchAll();
 }

?>
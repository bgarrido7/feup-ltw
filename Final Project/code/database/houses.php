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

function getHouse($houseID) {
    global $dbh;
    try {
        $stmt = $dbh->prepare('SELECT * FROM Houses WHERE houseID = ?');
        $stmt->execute(array($houseID));
        while($row=$stmt->fetch()){
        echo nl2br ("\nname: ");
        echo $row['name'];
        echo nl2br ("\nlocation: ");
        echo $row['location'];
        echo nl2br ("\nprice per day: ");
        echo $row['dailyPrice'];
        echo nl2br ("\ndescription: ");
        echo $row['description'];
        echo nl2br ("\npool: ");
        echo $row['pool'];
        echo nl2br ("\ncableTV: ");
        echo $row['cableTV'];
        echo nl2br ("\nWifi: ");
        echo $row['Wifi'];
        echo nl2br ("\nAC: ");
        echo $row['AC'];
        echo nl2br ("\nkitchen: ");
        echo $row['kitchen'];
        echo nl2br ("\n");
    }
    return 0;
    }catch(PDOException $e) {
        return null;
    }
}
//======================================================

function getHouseAttributes($houseID) {
    global $dbh;
        $stmt = $dbh->prepare('SELECT * FROM Houses WHERE houseID = ?');
        $stmt->execute(array($houseID));
        return  $stmt->fetch();
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
//============================for future implementation==========================

function editHouse($newTitle,$newDescription, $houseID){
    global $dbh;
        $stmt = $dbh->prepare('UPDATE Houses SET name = ?, description = ? WHERE houseID = ?');
        $result=$stmt->execute(array($newTitle, $newDescription, $houseID));

        if($refult!=-1)
        return true;
        else
        return false;

}
?>
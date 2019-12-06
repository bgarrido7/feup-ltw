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

function addOwner($userID, $houseID) {
    global $dbh;
    try {
        $stmt = $dbh->prepare('INSERT INTO Owners(userID, houseID) VALUES(:userID, :houseID)');
        $stmt->bindParam(':userID', $userID);
        $stmt->bindParam(':houseID', $houseD);
        if($stmt->execute())
            return true;
        else
            return false;
    } catch(PDOException $e) {
        return false;
    }
}

?>
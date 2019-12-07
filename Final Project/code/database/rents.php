<?php
function addDates($touristID, $houseID, $arrival, $duration) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO Reservations(touristID, houseID, arriveDate, stayLength) VALUES (?,?,?,?)');
    $result = $stmt->execute(array($touristID,$houseID,$arrival,$duration));
    return $result;
}
//======================================================

function getTouristStays($touristID) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Reservations WHERE touristID = ? ');
    $stmt->execute(array($touristID));
    return $stmt->fetchAll();
}
//======================================================
function getHouseTourists($houseID) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Reservations WHERE houseID = ? ');
    $stmt->execute(array($houseID));
    return $stmt->fetchAll();
}

//======================================================

function getHouseID(){
    global $dbh;
    $stmt = $dbh->prepare('SELECT houseID FROM Reservations ');
    $stmt->execute();
    return $stmt->fetchAll();
}

//======================================================

function deteleRent($touristID, $arrival){
    global $dbh;
    $stmt = $dbh->prepare('DELETE FROM Reservations WHERE touristID =? AND arriveDate=?');
    $result=$stmt->execute(array($touristID, $arrival));
    return $result;
}
?>
<?php
  function getAllCategories() {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM category');
    $stmt->execute();
    return $stmt->fetchAll();
  }
  
  function getCategory($cat_id) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM category WHERE id = ?');
    $stmt->execute(array($cat_id));
    return $stmt->fetch();  
  }

  function createCategory($name) {
    global $conn;
    
    $stmt = $conn->prepare('INSERT INTO category VALUES (NULL, ?)');
    $stmt->execute(array($name));
    return $stmt->fetch();  
  }
?>

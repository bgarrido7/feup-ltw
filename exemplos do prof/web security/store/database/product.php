<?php
  function getProductsFromCategory($cat_id) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM product WHERE cat_id = ?');
    $stmt->execute(array($cat_id));
    return $stmt->fetchAll();
  }
?>

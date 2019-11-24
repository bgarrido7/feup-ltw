<?php
include_once('database/connection.php');

function getAllRecipes() {
  global $dbh;

  $stmt = $dbh->prepare('SELECT * FROM recipes');
  $stmt->execute();
  return $stmt->fetchAll();
}

function getRecipe($id) {
  global $dbh;

  $stmt = $dbh->prepare('SELECT * FROM recipes WHERE rcp_id = ?');
  $stmt->execute(array($id));
  return $stmt->fetch();
}

function getRecipeIngredients($id) {
  global $dbh;

  $stmt = $dbh->prepare('SELECT * FROM ingredients WHERE rcp_id = ?');
  $stmt->execute(array($id));
  return $stmt->fetchAll();
}

function getRecipeSteps($id) {
  global $dbh;

  $stmt = $dbh->prepare('SELECT * FROM steps WHERE rcp_id = ?');
  $stmt->execute(array($id));
  return $stmt->fetchAll();
}

function addIngredient($id, $name, $quantity) {
  global $dbh;

  $stmt = $dbh->prepare('INSERT INTO ingredients VALUES (NULL, ?, ?, ?)');
  $stmt->execute(array($quantity, $name, $id));
}

?>
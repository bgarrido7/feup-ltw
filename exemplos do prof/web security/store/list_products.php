<?php
  include_once('config/init.php');
  include_once('database/category.php');
  include_once('database/product.php');

  $cat_id = $_GET['cat_id'];

  $category = getCategory($cat_id);
  $products = getProductsFromCategory($cat_id);

  include ('templates/header.php');
  include ('templates/list_products.php');
  include ('templates/footer.php');
?>

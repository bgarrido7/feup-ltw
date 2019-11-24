<!DOCTYPE html>
<html>
  <head>
    <title>Good Ol' Shop</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <h1>Good Ol' Shop</h1>
    </header>
    <nav>
      <?php
        if (isset($_SESSION['username'])) 
          include ('templates/logout_form.php');
        else    
          include ('templates/login_form.php');
      ?>

      <ul>
        <li><a href="list_categories.php">Categories</a></li>
        <?php if (!isset($_SESSION['username'])) { ?>
          <li><a href="register.php">Register</a></li>
        <?php } ?>
      </ul>
    </nav>

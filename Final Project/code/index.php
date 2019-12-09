<html>
<head>
    <title>Jūkyo</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/site/logo.svg" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <header id="intro">
      <div id="info">
        <img src="images/site/logo.png" alt="logo" width="50%">
        <h1><a>Jūkyo</a></h1>
     <!--     <i class="fa fa-home"></i> </br>
        <i class="fa fa-hotel"></i>(0)</br>
      <a href="list_cart.php"><i class="fa fa-search"></i> search</a>
        <a href="list_cart.php"><i class="fas fa-torii-gate"></i> </br>
     --> </div>
  
      <div id="user">
        <form action="actions/action_login.php" method="post">
          <input type="text" placeholder="email" name="email"  required="required">
          <input type="password" placeholder="password" name="pword"  required="required">
          
            <input type="submit" value="Login">
           <div></br></br> <a href="register.php">Register</a>
          </div>
        </form>
      </div>
    </header>

<?php include_once('template/common/footer.php');
?>

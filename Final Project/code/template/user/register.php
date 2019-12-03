
<head>
    <title>Jūkyo</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/site/logo.svg" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

<!--=======================exemplos do restivo=================
<section id="register">
  <h2>Register</h2>
  <form action="../actions/action_register.php" method="post">
    <input type="text" name="username" placeholder="username" required>
    <span class="hint">Only lowercase, at least 3 characters</span> </br>
    <input type="password" name="password" placeholder="Password" required>
    <span class="hint">One uppercase, 1 symbol, 1 number, at least 8 characters</span> </br>
    <input type="password" name="repeat" placeholder="Repeat Password" required> 
    <span class="hint">Must match password</span> </br>
    <input type="submit" value="Register">
  </form>
</section>
================================================================
  !-->

  <section id="register">

   <h1>Register for an Account:</h1>
   <form action="../code/actions/action_register.php" method="post">
    Username: <input type="text" name="name" /><br />
    Email: <input type="text" name="email" /><br />
    Password: <input type="password" name="pword" /><br />
    Repeat Password: <input type="password" name="repeatPword"/> <br/>
    Birthday: <input type="date" value="2019-12-17" name="bday"><br/>
  <!--  Profile Picture:<input type="file" name="profilePic"> <br/>    
   --> <input type="submit" value="Register" />

 </form>
 </section>

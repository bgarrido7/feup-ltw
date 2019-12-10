  <section id="register">

   <h1>Register for an Account:</h1>
   <form action="../actions/action_register.php" method="post" >
    Username: <input type="text" name="name"  required="required"><br />
    Email: <input type="email" name="email"  required="required"><br />
    Password: <input type="password" name="pword" required="required"><br />
    Repeat Password: <input type="password" name="repeatPword"  required="required"> <br/>
    Birthday: <input type="date" value="2019-12-17" name="bday"><br/>
    Profile Picture:<input type="file" name="profilePic"> <br/>    
   <input type="submit" value="Register" />

   <div id="error">
   <?php if(isset($_SESSION['error'])) echo htmlentities($_SESSION['error']); unset($_SESSION['error'])?>

            </div>
 </form>
 </section>

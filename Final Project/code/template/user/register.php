  <div id="register">

   <h1>Register for an Account:</h1> </br>
   <form action="../actions/action_register.php" method="post" enctype="multipart/form-data" ></br>
    Username: <input type="text" name="name"  required="required"><br /></br>
    Email:  <input type="email" name="email"  required="required"><br /></br>
    Password: <input type="password" name="pword" required="required"><br /></br>
    Repeat Password:  <input type="password" name="repeatPword"  required="required"> </br><br/>
    Birthday: <input type="date" value="2019-12-17" name="bday"><br/></br>
    Profile Picture:  <input type="file" name="fileToUpload" id="fileToUpload" ></br>(please only submit .jpg files) <br/>    </br>   <input type="submit" value="Register" />
    </br>
   <div id="error">
   <?php if(isset($_SESSION['error'])) echo htmlentities($_SESSION['error']); unset($_SESSION['error'])?>

            </div>
 </form>
</div>

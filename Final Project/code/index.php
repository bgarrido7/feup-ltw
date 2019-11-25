<!DOCTYPE html>

<html>
   <head><title>Workflow System</title></head>
   <body>
      <h1>Register for an Account:</h1>
 
      <form action="registration.php" method="POST" enctype="multipart/form-data">
 
         Username: <input type="text" name="name" /><br />
         Email: <input type="text" name="email" /><br />
         Password: <input type="password" name="pword" /><br />
         Repeat Password: <input type="password" name="repeatPword"/> <br/>
         Birthday: <input type="date" value="2019-12-17" name="bday"><br/>

         Profile Picture:<input type="file" name="profilePic"> <br/>

         
         <input type="submit" value="Register" />
 
      </form>
 
   </body>
</html>
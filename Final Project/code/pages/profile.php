<?php
include_once('../template/common/header.php');
include_once('../includes/init.php');
include_once('../database/user.php');
include_once('../template/common/header.php');

$_SESSION['email'] = getUserName($_SESSION['email']);

htmlentities($_SESSION['email']);
?>

<h1>Change Personal Information</h1>
<div class="content">
    <form action="../actions/action_edit_profiler.php" method="post" class="register_form">
        <label>Username</label>
        <input name="name" class="w3-input w3-border" type="text" placeholder="<?php htmlentities($_SESSION['email']) ?>" required="required"></br> </br>
     <!--   <label>Email</label>
       <input name="email" class="w3-input w3-border" type="email" placeholder="Email" value="<?php htmlentities($_SESSION['email']) ?>" required="required"></br></br>
     -->   <label>Password</label>
        <input name="pword" class="w3-input w3-border" type="password" placeholder="New Password">
        <input name="repeatPword" class="w3-input w3-border" type="password" placeholder="Repeat New Password">
        <input type="submit" name="Submit" value="Update">
    </form>  
</div>
<!--
<div id="photo_field">
    <form action="../actions/api_upload_photo.php" method="post" enctype="multipart/form-data">
        <label>Photo</label>
        <img id="photo" src="<?php /* echo  htmlentities('../profilePictures/'.$_SESSION['email']['Photo']) */?>" alt="Profile Picture">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" name="Submit" value="Upload">
    </form>
</div>
  -->
<?php
include_once("../template/common/footer.php");

?>
<h1>Change Personal Information</h1>
<div class="content">
    <form action="../actions/action_edit_profile.php" method="post" class="register_form">
    <input name="email" type="hidden" value="<?php $_SESSION['email'] ?>">

        <label>Username</label>
        <input name="name" class="w3-input w3-border" type="text" placeholder="<?php echo getName(getID($_SESSION['email'])['userID']); ?>" ></br> </br>
        <label>Birthday</label>
       <input name="bday" class="w3-input w3-border" type="date" value="<?php echo getBirthday($_SESSION['email'])['birthday']; ?>"></br></br>
       <label>Password</label>
        <input name="pword" class="w3-input w3-border" type="password" placeholder="New Password">
        <input name="repeatPword" class="w3-input w3-border" type="password" placeholder="Repeat New Password"></br></br>
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
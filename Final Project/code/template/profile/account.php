<div class="content">

    <div id=profile>
        <div id="profile_info">
            <img src="../images/users/<?php echo htmlentities($userID);  ?>.jpg" alt="userPic">
            <p><?php echo htmlentities($name);?>, <?php echo htmlentities($age);?> </p>
        </div>

        <h1>Change Personal Information</h1>

            <form action="../actions/action_edit_profile.php" method="post" class="register_form">
                <label>Username</label>
                <input name="name" class="w3-input w3-border" type="text" placeholder="<?php echo htmlentities($name); ?>" ></br> </br>
                <label>Birthday</label>
            <input name="bday" class="w3-input w3-border" type="date" value="<?php echo htmlentities($bday);?>"></br></br>
            <label>Password</label>
                <input name="pword" class="w3-input w3-border" type="password" placeholder="New Password">
                <input name="repeatPword" class="w3-input w3-border" type="password" placeholder="Repeat New Password"></br></br>
                <input type="submit" name="Submit" value="Update">
            </form>  

        <div id="error">
            <?php if(isset($_SESSION['error'])) echo htmlentities($_SESSION['error']); unset($_SESSION['error'])?>  
        </div>
    </div>  
</div>

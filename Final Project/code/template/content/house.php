<div id="content">
    <div id="owner">
        <h2>Meet the owner </h2>
        <img src="../images/users/<?php echo htmlentities($ownerID);  ?>.jpg" alt="owner">

        <h3><?php echo htmlentities($owner);  ?>, <?php echo htmlentities($age);  ?> </h3>
      </div> 
      <h1> <?php echo htmlentities($houseName);  ?></h1>
    
</br>
<div id="house_presentation">
    <img src="../images/houses/<?php echo htmlentities($houseID);  ?>.jpg" alt="house">
      <div id="attributes">
        <p><b>Location: </b><?php echo htmlentities($local);  ?></p>
        <p><b>Price per day: </b><?php echo htmlentities($price);  ?></p>
        <p><b>Description: </b><?php echo htmlentities($desc);  ?></p>
        <li>has pool? <?php echo htmlentities($pool);  ?></li>
        <li>cable TV? <?php echo htmlentities($cable);  ?></li>
        <li>wifi? <?php echo htmlentities($wifi);  ?></li>
        <li>AC? <?php echo htmlentities($ac);  ?></li>
        <li>kitchen? <?php echo htmlentities($kitchen);  ?></li>
    </div>
</div>


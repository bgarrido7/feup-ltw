<div id="content">
    <h1> <?php echo htmlentities($houseName);  ?></h1>
    <div id="owner">
        <h3>Owner: <?php echo htmlentities($owner);  ?>, <?php echo htmlentities($age);  ?> </h3>
        <img src="../images/users/<?php echo htmlentities($ownerID);  ?>.jpg" alt="owner" width="10%" height="20%">
    </div>
</br>
    <div>
        <img src="../images/houses/<?php echo htmlentities($houseID);  ?>.jpg" alt="house" width="60%" height="50%">
        <p>location: <?php echo htmlentities($local);  ?></p>
        <p>price per day: <?php echo htmlentities($price);  ?></p>
        <p>description: <?php echo htmlentities($desc);  ?></p>
        <p>has pool? <?php echo htmlentities($pool);  ?></p>
        <p>cable TV? <?php echo htmlentities($cable);  ?></p>
        <p>wifi? <?php echo htmlentities($wifi);  ?></p>
        <p>AC? <?php echo htmlentities($ac);  ?></p>
        <p>kitchen? <?php echo htmlentities($kitchen);  ?></p>
    </div>
</div>


<?php
include_once('../template/common/header.php');
include_once("../template/common/aside.php");

?>
<section id="adition">
   <form action="../actions/action_addHouse.php" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" required="required"><br />
    <label> Location:
        <select name="city" required="required">
            <option value="usa">USA</option>
            <option value="sw">Switzerland</option>
            <option value="pt">Portugal</option>
            <option value="poland">Poland</option>
            <option value="croatia">Croatia</option>
            <option value="au">Australia</option>
        </select>
                </label>
    Price per day: <input type="number" name="price" required="required"> <br/>
    Description: <textarea name="desc" rows="4" cols="50" required="required"></textarea>
    
  <ul>Aditional things
  <ul>  Pool: <input type="checkbox"  name="pool" ></ul>
  <ul>  Cable TV: <input type="checkbox"  name="cable"></ul>
  <ul>  Wifi: <input type="checkbox"  name="wifi"></ul>
  <ul>  AC: <input type="checkbox"  name="ac"></ul>
  <ul>  Kitchen: <input type="checkbox"  name="kitchen"></ul>  
    </ul>
  <!--  Profile Picture:<input type="file" name="profilePic"> <br/>    
   --> 
   <input type="submit" value="Add" />

 </form>
 </section>
 <?php
include_once("../template/common/footer.php");
?>
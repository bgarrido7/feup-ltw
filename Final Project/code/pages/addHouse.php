<?php
include_once('../template/common/header.php');
?>
<section id="adition">
   <form action="../actions/action_addHouse.php" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" /><br />
    <label> Location:
        <select name="city">
            <option value="usa">USA</option>
            <option value="sw">Switzerland</option>
            <option value="pt">Portugal</option>
            <option value="poland">Poland</option>
            <option value="croatia">Croatia</option>
            <option value="au">Australia</option>
        </select>
                </label>
    Price per day: <input type="number" name="price"/> <br/>
    Description: <textarea name="description" rows="4" cols="50">
</textarea>
  <ul>Aditional things
  <ul>  Pool: <input type="checkbox"  name="pool"></ul>
  <ul>  Cable TV: <input type="checkbox"  name="cable"></ul>
  <ul>  Wifi: <input type="checkbox"  name="wiki"></ul>
  <ul>  AC: <input type="checkbox"  name="ac"></ul>
  <ul>  Kitchen: <input type="checkbox"  name="kitchen"></ul>  
    </ul>
  <!--  Profile Picture:<input type="file" name="profilePic"> <br/>    
   --> <input type="submit" value="Add" />

 </form>
 </section>
 <?php
include_once("../template/common/footer.php");
?>
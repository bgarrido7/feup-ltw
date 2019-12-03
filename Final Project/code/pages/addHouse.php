<?php
include_once('../templates/common/header.php');
?>

  <section id="adition">
   <form action="../actions/action_addHouse.php" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" /><br />
    <label> Location:
        <select name="city">
            <option value="CA">California</option>
            <option value="SW">Switzerland</option>
            <option value="SerraEstrela">Serra da Estrela</option>
            <option value="Poland">Poland</option>
            <option value="Hawai">Hawai</option>
            <option value="Australia">Australia</option>
      
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

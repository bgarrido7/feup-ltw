<section id="adition">
   <form action="../actions/action_edit_house.php" method="post" enctype="multipart/form-data">
   <input type="hidden" name="houseID" value="<?php echo htmlentities($houseID);  ?>"/>
    Name: <input type="text" name="name"  placeholder="<?php echo htmlentities($name); ?>"></br ></br>
    <label> Location:
        <select name="city">
            <option value="USA">USA</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Portugal">Portugal</option>
            <option value="Poland">Poland</option>
            <option value="Croatia">Croatia</option>
            <option value="Australia">Australia</option>
        </select>
                </label></br></br>
    Price per day: <input type="number" name="price" placeholder="<?php echo htmlentities($price);?>"> </br></br>
    Description: <textarea name="desc" rows="4" cols="50" placeholder="<?php echo  htmlentities($desc);?>"></textarea></br>
    
  <ul>Aditional things
  <ul>  Pool: <input type="checkbox"  name="pool"></ul>
  <ul>  Cable TV: <input type="checkbox"  name="cable" ></ul>
  <ul>  Wifi: <input type="checkbox"  name="wifi" ></ul>
  <ul>  AC: <input type="checkbox"  name="ac"></ul>
  <ul>  Kitchen: <input type="checkbox"  name="kitchen"></ul>  
    </ul>
  <!--  Profile Picture:<input type="file" name="profilePic"> <br/>    
   --> 
   <input type="submit" value="Edit" />

 </form>
 </section>
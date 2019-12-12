<section id="adition">
   <form action="../actions/action_edit_house.php" method="post" enctype="multipart/form-data">
   <input type="hidden" name="houseID" value="<?php echo htmlentities($houseID);  ?>"/>
    Name: <input type="text" name="name"  placeholder="<?php echo htmlentities($name); ?>"><br />
    <label> Location:
        <select name="city">
        <option disabled selected value> select an option </option>
            <option value="usa">USA</option>
            <option value="sw">Switzerland</option>
            <option value="pt">Portugal</option>
            <option value="poland">Poland</option>
            <option value="croatia">Croatia</option>
            <option value="au">Australia</option>
        </select>
                </label>
    Price per day: <input type="number" name="price" placeholder="<?php echo htmlentities($price);?>"> <br/>
    Description: <textarea name="desc" rows="4" cols="50" placeholder="<?php echo  htmlentities($desc);?>"></textarea>
    
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
<section id="adition">
   <form action="../actions/action_addHouse.php" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" required="required"><br />
    <label> Location:
        <select name="city" required="required">
            <option value="USA">USA</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Portugal">Portugal</option>
            <option value="Poland">Poland</option>
            <option value="Croatia">Croatia</option>
            <option value="Australia">Australia</option>
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
  House picture:<input type="file" name="fileToUpload" id="fileToUpload" >please only submit .jpg files <br/>    

   <input type="submit" value="Add" />

 </form>
 </section>
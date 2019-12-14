<div id="content">

<div id="search_by">
<form action="../actions/api_find_house.php" method="post">
    <i class="fa fa-search"></i>
    <input type="text" name="search">
    </br>
    <label> Location:
    <select name="city">
    <option disabled selected value> select an option </option>
        <option value="usa">USA</option>
        <option value="sw">Switzerland</option>
        <option value="pt">Portugal</option>
        <option value="poland">Poland</option>
        <option value="croatia">Croatia</option>
        <option value="au">Australia</option>
    </select> </label>

    </br>Price Range: 
    <input type="number" name="lowerPrice">
    <input type="number" name="upperPrice">

   </br>Additional Things: 
    <input type="checkbox" name="pool" >Pool
    <input type="checkbox" name="cable" >Cable TV
    <input type="checkbox" name="wifi" >Wifi
    <input type="checkbox" name="ac" >AC
    <input type="checkbox" name="kitchen">Kitchen
</form>
</div>
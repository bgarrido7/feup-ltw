
<script src="../js/search.js" defer></script>

<div id="content">
    <div id="search_by">
        <i class="fa fa-search"></i>
        <input type="text" id="search" name="search">
        </br>

        <label> Location:
            <select name="city" id="city">
                <option disabled selected value> select an option </option>
                <option value="usa">USA</option>
                <option value="sw">Switzerland</option>
                <option value="pt">Portugal</option>
                <option value="poland">Poland</option>
                <option value="croatia">Croatia</option>
                <option value="au">Australia</option>
            </select> 
        </label>
        </br>
        
        <label>Price Range: 
            <input type="number" id="lowerPrice">
            <input type="number" id="upperPrice">
        </label>

    </br>Additional Things: 
        <input type="checkbox" name="pool" >Pool
        <input type="checkbox" name="cable" >Cable TV
        <input type="checkbox" name="wifi" >Wifi
        <input type="checkbox" name="ac" >AC
        <input type="checkbox" name="kitchen">Kitchen
    </div>

    <div id="filter_houses">
        <!--o javascript vai aparecer aqui magicamente-->
    </div>

</div>



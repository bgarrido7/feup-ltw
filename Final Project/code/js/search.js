let houses_list= document.querySelector("div#filter_houses");

//search bar
let search_bar=document.querySelector("input#search"); 

//dropdown list
let dropdown_list= document.getElementById("city");

//price range
//let lower= document.getElementById("lowerPrice");
//let upper= document.getElementById("upperPrice");

let ajaxRequestFindHouses = new XMLHttpRequest();
const api_find_houses = "../actions/api_find_house.php";

function encodeForAjax(data) {
    return Object.keys(data).map(function(k){
        return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
    }).join('&');
}

function sendRequest_findHouses(){
    let word=search_bar.value;
    let city=dropdown_list.value;

//    let lowerPrice=lower.value;
//    let upperPrice=upper.value;

    let requestData = {word: word, city: city};//, lowerPrice:lowerPrice, upperPrice:upperPrice};

    //remove o que foi escrito anteriormente
    while (houses_list.firstChild) { 
        houses_list.removeChild(houses_list.firstChild);
    }

    ajaxRequestFindHouses.open("get", (api_find_houses + '?' + encodeForAjax(requestData)),true);
    ajaxRequestFindHouses.send();
    ajaxRequestFindHouses.addEventListener('load',requestHousesListener);
}

//=====================pôr no html as coisas encontradas===============
function requestHousesListener(){
    let resultHouses = JSON.parse(this.responseText);
    console.log(resultHouses);

    for(let i=0; i<resultHouses.length;i++){
       let houseName= document.createElement("h2");
       let houseDesc= document.createElement("ul");
       let houseLocat= document.createElement("li");
       let housePrice= document.createElement("li");
             
       houseName.innerHTML = resultHouses[i].name;
       houseDesc.innerHTML = resultHouses[i].description;
       houseLocat.innerHTML = "in " + resultHouses[i].location;
       housePrice.innerHTML = resultHouses[i].dailyPrice + "$ /day";
       // house.setAttribute('',); //dar atributos aos divs ou wtv

       houses_list.appendChild(houseName);
       houses_list.appendChild(houseDesc);
       houses_list.appendChild(houseLocat);
       houses_list.appendChild(housePrice);
    
       //===================house TAGS================================
       let pool= document.createElement("li");
       let tv= document.createElement("li");
       let wifi= document.createElement("li");
       let ac= document.createElement("li");
       let kitchen= document.createElement("li");

       pool.innerHTML = "pool? " + resultHouses[i].pool;
       tv.innerHTML = "cable TV? " + resultHouses[i].cableTV;
       wifi.innerHTML = "wifi? " + resultHouses[i].Wifi;
       ac.innerHTML = "AC? " + resultHouses[i].AC;
       kitchen.innerHTML ="kitchen? " +  resultHouses[i].kitchen;

       houses_list.appendChild(pool);
       houses_list.appendChild(tv);
       houses_list.appendChild(wifi);
       houses_list.appendChild(ac);
       houses_list.appendChild(kitchen);

    }
}

search_bar.addEventListener('keyup',sendRequest_findHouses);
dropdown_list.addEventListener("change", sendRequest_findHouses)
//lower.addEventListener('keyup',sendRequest_findHouses);
//upper.addEventListener('keyup',sendRequest_findHouses);
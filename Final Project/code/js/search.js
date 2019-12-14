let houses_list= document.querySelector("div#filter_houses");

let search_bar=document.querySelector("input#search");

let ajaxRequestFindHouses = new XMLHttpRequest();
const api_find_houses = "../actions/api_find_house.php";

function encodeForAjax(data) {
    return Object.keys(data).map(function(k){
        return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
    }).join('&');
}

function sendRequest_findHouses(){
    let filter=search_bar.value;
    let requestData = {filter: filter};
    while (houses_list.firstChild) {
        houses_list.removeChild(houses_list.firstChild);
    }
    ajaxRequestFindHouses.open("get", (api_find_houses + '?' + encodeForAjax(requestData)),true);
    ajaxRequestFindHouses.send();
    ajaxRequestFindHouses.addEventListener('load',requestHousesListener);
}


function requestHousesListener(){
    let resultHouses = JSON.parse(this.responseText);
console.log(resultHouses);

    for(let i=0; i<resultHouses.length;i++){
       let house= document.createElement("li");
       house.innerHTML = resultHouses[i].name;
       // house.setAttribute('innerHTML',); //dar atributos aos divs ou wtv
       houses_list.appendChild(house);
    }
}

search_bar.addEventListener('keyup',sendRequest_findHouses);



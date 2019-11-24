let text = document.getElementById("country");
text.addEventListener("keyup", countryChanged);

// Handler for change event on text input
function countryChanged(event) {
  let text = event.target;

  let request = new XMLHttpRequest();
  request.addEventListener("load", countriesReceived);
  request.open("get", "getcountries.php?name=" + text.value, true);
  request.send();
}

// Handler for ajax response received
function countriesReceived() {
  let countries = JSON.parse(this.responseText);
  let list = document.getElementById("suggestions");
  list.innerHTML = ""; // Clean current countries

  // Add new suggestions
  for (country in countries) {
    let item = document.createElement("li");
    item.innerHTML = countries[country].name;
    list.appendChild(item);
  }
}

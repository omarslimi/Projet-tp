city.onchange = () => {
    zipCode.value = city.options[city.selectedIndex].getAttribute('zipcode');
}
zipCode.onkeyup = () =>{
    if(zipCode.value.length >= 3){
        city.innerHTML = '';
        var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          let citiesList = JSON.parse(this.responseText);
        for(cityDetails of citiesList){
            let attr = document.createAttribute('zipcode');
            attr.value = cityDetails.zip_code;
            let newOption = document.createElement('option');
            newOption.value = cityDetails.id;
            newOption.innerText = cityDetails.zip_code + ' - ' + cityDetails.name;
            newOption.setAttributeNode(attr);
            city.appendChild(newOption);
        }
      }
    };
    xmlhttp.open("GET", "controllers/registerController.php?zipCode=" + zipCode.value, true);
    xmlhttp.send();
    } 
}
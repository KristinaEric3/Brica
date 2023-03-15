document.addEventListener("DOMContentLoaded", () => {

  });


function dodajUslugu(){
    var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       document.getElementById("prikazUsluge").innerHTML = xhttp.responseText;
    }
   
};
xhttp.open("GET", "dodaj.php", true);
xhttp.send();
}



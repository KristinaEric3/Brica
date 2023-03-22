
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

function dodajZaposlenog(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       document.getElementById("prikazZaposlenog").innerHTML = xhttp.responseText;
    }
};
xhttp.open("GET", "dodajZaposlenog.php", true);
xhttp.send();
}


function validacijaaddUsluga(){
    let nazivUsluge = document.querySelector("#nazivUsluge").value;
    let cenaUsluge = document.querySelector("#cenaUsluge").value;
    let selectUsluge = document.querySelector("#selectUsluge").value;
    let errornaziv = document.querySelector("#errornazivUsluge");
    let errorcena = document.querySelector("#errorcenaUsluge");
    let errorvreme = document.querySelector("#errorvremeUsluge");
    if(nazivUsluge.length < 10 || cenaUsluge.length < 2)
    {
        if(nazivUsluge.length < 6)
        {
            errornaziv.style.display="block";
            return false;
        }
        if(cenaUsluge < 2){
            errorcena.style.display="block";
            return false;
        }
    }
    if(selectUsluge=='Vreme'){
        errorvreme.style.display="block";
        return false;
    }  
}

function validacijaAddZaposlenog(){
    let imeZaposlenog = document.querySelector("#imeZaposlenog").value;
    let prezimeZaposlenog = document.querySelector("#prezimeZaposlenog").value;
    let emailZaposlenog = document.querySelector("#emailZaposlenog").value;
    let phoneZaposlenog = document.querySelector("#phoneZaposlenog").value;
    let errorime = document.querySelector("#errorimeZaposlenog");
    let errorprezime = document.querySelector("#errorprezimeZaposlenog");
    let erroremail = document.querySelector("#erroremailZaposlenog");
    let errorphone = document.querySelector("#errorphoneZaposlenog");
    if(imeZaposlenog.length < 3 || prezimeZaposlenog.length < 3)
    {
        if(imeZaposlenog.length < 3)
        {
            errorime.style.display="block";
            return false;
        }
        if(prezimeZaposlenog.length < 3){
            errorprezime.style.display="block";
            return false;
        }
    }
}
function uslugeKlik(){
   
    
}

function obrisiUslugu(id){
    setCookie('idUslugeDelete',id,1);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.querySelector("body").innerHTML = this.responseText;
        }
       
      };
      xhttp.open("GET", "deleteUsluge.php", true);
        xhttp.send();
    

}
function izmeniZaposlenog(id){
    
   for(let i of zaposleni)
   {
    if(i['IDUSLUGE']==id)
    {
        let ime = documen.querySelector(".ime").innerHTML="Lukas";
    }
   }
}
function obrisiZaposlenog(id){
    setCookie('idZaposlenogDelete',id,1);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.querySelector("body").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "deleteZaposlenog.php", true);
      xhttp.send();
}
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
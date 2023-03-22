
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
<<<<<<< HEAD
  }


  function validacijalogin(){
    let email=document.querySelector("#email").value;
    let pass=document.querySelector("#pass").value;
    let error1 = document.querySelector("#error1");
    let error2 = document.querySelector("#error2");

    if (email == "" ||  pass == ""){
        
        if(email=="" && pass!="")
       {
          error1.innerHTML="<p style='margin-top:5px;color:red;'>Niste uneli email!</p>";
        error2.innerHTML="";
      }
      else if(email !="" && pass =="")
      {
         error2.innerHTML="<p style='margin-top:5px;color:red;'>Niste uneli lozinku!</p>";
         error1.innerHTML="";
      }
     else
      {
        error1.innerHTML="<p style='margin-top:5px;color:red;'>Niste uneli email!</p>";
        error2.innerHTML="<p style='margin-top:5px;color:red;'>Niste uneli lozinku!</p>";  
      }
      return false;
  }
  else{
    for(let i of korisnici)
    {
      if(email == i['EMAIL']  && pass== i['PASSWORD'])
      {
        window.location.assign("index.php");
      }
  }
   
}
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function validacijasignup(){
    let name=document.forms["formSignIn"]["name"].value;
    let surname=document.forms["formSignIn"]["surname"].value;
    let email2=document.forms["formSignIn"]["email2"].value;
    let phone=document.forms["formSignIn"]["phone"].value;
    let password=document.forms["formSignIn"]["password"].value;
    let password2=document.forms["formSignIn"]["password2"].value;
    let error1 = document.querySelector("#error1");
    let error2 = document.querySelector("#error2");
    let error4 = document.querySelector("#error4");
    let error5 = document.querySelector("#error5");

  
    if (name.length<3  || surname.length<3 ||  password.length<3 || password2!=password){
        
        if(name.length<3)
        {
           error1.innerHTML="<p style='margin-top:5px;color:red;'>Minimum 3 karaktera!</p>";
           error4.innerHTML="";
           error5.innerHTML="";
        }
        if(surname.length<3)
        {
           error1.innerHTML="<p style='margin-top:5px;color:red;'>Minimum 3 karaktera!</p>";
           error4.innerHTML="";
           error5.innerHTML="";
        }
       else if( password.length < 3)
        {
         error1.innerHTML="";
         error5.innerHTML="";
         error4.innerHTML="<p style='margin-top:5px;color:red;'>Minimum 3 karaktera!</p>";
     }
       else if( password2 != password)
        {
         error4.innerHTML="";
         error1.innerHTML="";
         error5.innerHTML="<p style='margin-top:5px;color:red;'>Lozinke se ne poklapaju!</p>";       }

         return false;
     }
     else{
       for(let i of korisnici)
       {
         if(email2 == i['EMAIL'])
         {
           error4.innerHTML="";
           error5.innerHTML="";
           error1.innerHTML="";
           error2.innerHTML="<p style='margin-top:5px;color:red;'>Email adresa vec postoji!</p>";
           return false;
         }

       }
       //return ajaxAddUser();
       
     }
    
   
       }


    




      // function ajaxAddUser() {
       // const xhttp = new XMLHttpRequest();
       // xhttp.onreadystatechange = function() {
        //  if (this.readyState == 4 && this.status == 200) {
          //  document.querySelector("body").innerHTML =
           // this.responseText;
         // }
        //};
        //xhttp.open("GET", "addUser.php");
        //xhttp.send();
      //}
 

   

  
      }
=======
  }
>>>>>>> da96520c0ca3badf55831cf93e03c8fc4e32da9d

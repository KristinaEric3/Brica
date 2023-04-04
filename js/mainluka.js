
document.addEventListener("DOMContentLoaded", () => {
   
  setCookie("vreme",0,-1);
  setCookie("usluga",0,-1);
  setCookie("brica",0,-1);
  setCookie("staroVreme",0,-1);
  setCookie("stariBrica",0,-1);
  setCookie("staraUsluga",0,-1);
 
  birajBricu();
  });

  
function dodajUslugu(){
  document.querySelector(".btnDodajUslugu").style.display="none";
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

function closeNovaUsluga(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         // Typical action to be performed when the document is ready:
         document.querySelector("body").innerHTML = xhttp.responseText;
      }
  };
  xhttp.open("GET", "adminusluge.php", true);
  xhttp.send();
}
function izmeniUslugu(id){ 
  let naziv;
  let cena;
  for(let i of usluge)
  {
    if(i['IDUSLUGE']==id)
    {
      naziv = i['NAZIVUSLUGE'];
      cena = i['CENAUSLUGE'];
    }
  }
 let tr = document.getElementById(id);
   tr.innerHTML=` 
   <td></td>  
   <td>
     <input  required  type="text" name="nazivUsluge" required class="form-control" id="nazivUsluge" aria-describedby="emailHelp" value='${naziv}'>
   <small id="errornazivUsluge">Minimum 3 karaktera!</small>
   </td>
   <td>
       <input  required  type="number"  name="cenaUsluge" required class="form-control" id="cenaUsluge" value='${cena}'>
       <small id="errorcenaUsluge">Minimum 3 karaktera!</small>
       </td>
       <td>
      <select class="form-select" id="selectIzmenaUsluge"  name="vremeUslugeIzmena" >
      <option selected>Vreme</option>
       </select>
       <small id="errorvremeUsluge"></small>
       </td>
       <td>
   <input onclick="izmeniUslugu2('${id}')" type="submit" class="btn btn-primary" value="Sacuvaj">
   <input  type="text" style="visibility:hidden;" name="id" value='${id}'>
   </td>
   </tr>`;


   let select = document.querySelector("#selectIzmenaUsluge");
   for(let i =5 ;i<=180;i+=5){
   select.innerHTML+=`<option value='${i}'>${i} min</option>`;
   }
 
}
function izmeniUslugu2(id){
  let nazivUsluge = document.querySelector("#nazivUsluge").value;
  let cenaUsluge = document.querySelector("#cenaUsluge").value;
  let selectUsluge = document.querySelector("#selectIzmenaUsluge").value;
  let errornaziv = document.querySelector("#errornazivUsluge");
  let errorcena = document.querySelector("#errorcenaUsluge");
  let errorvreme = document.querySelector("#errorvremeUsluge");
  if(nazivUsluge.length < 10 || cenaUsluge.length < 2)
  {
      if(nazivUsluge.length < 6)
      {
        return  errornaziv.style.display="block";
      }
      if(cenaUsluge < 2){
        return  errorcena.style.display="block";
      }
  }
  if(selectUsluge=='Vreme'){
    errorvreme.innerHTML="Ovo polje je obavezno!";
    return  errorvreme.style.display="block";
    
  }  
 


  setCookie("idUslugeIzmena",id,1);
  setCookie("nazivUslugeIzmena",nazivUsluge,1);
  setCookie("cenaUslugeIzmena",cenaUsluge,1);
  setCookie("vremeUslugeIzmena",selectUsluge,1);
  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.querySelector("body").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "izmeniUslugu.php", true);
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

  let ime;
  let prezime;
  let email;
  let phone;
  
  for(let i of zaposleni)
  {
    if(i['IDZAPOSLENOG']==id)
    {
      ime = i['IMEZAPOSLENOG'];
      prezime = i['PREZIMEZAPOSLENOG'];
      email = i['EMAIL'];
      phone = i['PHONE'];
    }
  }

 let tr = document.getElementById(id);
   tr.innerHTML=`   
   <td></td>
   <td>
     <input required  type="text" name="imeZaposlenog" required class="form-control" id="imeZaposlenog" aria-describedby="emailHelp" value='${ime}'>
   <small id="errorimeZaposlenog">Minimum 3 karaktera!</small>
   </td>
   <td>
       <input required  type="text"  name="prezimeZaposlenog" required class="form-control" id="prezimeZaposlenog" value='${prezime}'>
       <small id="errorprezimeZaposlenog">Minimum 3 karaktera!</small>
       </td>
       <td>
       <input   type="text"  name="emailZaposlenog"  class="form-control" id="emailZaposlenog" value='${email}'>
       <small id="erroremailZaposlenog"></small>
       </td>
       <td>
       <input required  type="text"  name="phoneZaposlenog" required class="form-control" id="phoneZaposlenog" value='${phone}'>
       <small id="errorphoneZaposlenog"></small>
       </td>
       <td>
   <input onclick="izmeniZaposlenog2('${id}')" type="submit" class="btn btn-primary" value="Sacuvaj">
   <input  type="text" style="visibility:hidden;" name="id" value='${id}'>
   </td>
   </tr>`;
}
function izmeniZaposlenog2(id){
  let ime = document.querySelector("#imeZaposlenog").value;
  let prezime = document.querySelector("#prezimeZaposlenog").value;
  let email = document.querySelector("#emailZaposlenog").value;
  let phone = document.querySelector("#phoneZaposlenog").value;
  let errorime = document.querySelector("#errorimeZaposlenog");
  let errorprezime = document.querySelector("#errorprezimeZaposlenog");

  if(ime.length < 3 || prezime.length < 3)
  {
      if(ime.length < 3)
      {
       return   errorime.style.display="block";
     
      }
      if(prezime.length < 3){
       return   errorprezime.style.display="block";
          
      }
  }


  setCookie("idZaposlenogIzmena",id,1);
  setCookie("imeZaposlenogIzmena",ime,1);
  setCookie("prezimeZaposlenogIzmena",prezime,1);
  setCookie("emailZaposlenogIzmena",email,1);
  setCookie("phoneZaposlenogIzmena",phone,1);
  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.querySelector("body").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "izmeniZaposlenog.php", true);
      xhttp.send();
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
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
=======
<<<<<<< HEAD
>>>>>>> 9cde3f32a2ea65fea149fd83dda34821d603db61
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
<<<<<<< HEAD
}
=======
   
>>>>>>> 9cde3f32a2ea65fea149fd83dda34821d603db61
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

<<<<<<< HEAD
=======

    




>>>>>>> 9cde3f32a2ea65fea149fd83dda34821d603db61
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
<<<<<<< HEAD

      

      function RadioBtnZakaziVreme(id){
        let vreme
        let stariId = getCookie("staroVreme");
        if(stariId){
        document.getElementById(stariId).style.backgroundColor= "white";
        }
       setCookie("staroVreme",id,1);
       if(stariId){
        vreme = document.getElementById(id);
        vreme.style.backgroundColor="lightgreen";
        setCookie("vreme",vreme.value,1); 
       }
       
           
      }
      function zakaziRadioBtnUslugu(id){
        let stariId = getCookie("staraUsluga");
       if(stariId){
        document.getElementById(stariId+'kl').style.backgroundColor= "white";
        document.getElementById(stariId+'kl').style.color= "black";
       }
       setCookie("staraUsluga",id,1)
        let usluga = document.getElementById(id+'kl');
        usluga.style.backgroundColor="green";
        usluga.style.transition="ease-out 1s";
        usluga.style.borderRadius="15px";
        usluga.style.color="white";
        setCookie("usluga",usluga.value,1)  
      }

      function dodajRezervaciju(){
        let v = getCookie("vreme");
        let u = getCookie("usluga");
        let brica = getCookie("brica");

          if(v==0 || u==0 || brica == 0)
          {
            if(v==0)
            {
              alert("Vreme je obavezno polje!");           
            }
            else if(u==0){
              alert("Usluga je obavezno polje!");           
            }
            else if(brica==0)
            {
              alert("Izaberite bricu!");
            }
            else
              {
                alert("Brica, vreme i usluga su obavezna polja!");
              }
          }
          else
          {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.querySelector("body").innerHTML = this.responseText;
             }
            };
            xhttp.open("GET", "php/dodajRezervaciju.php", true);
            xhttp.send(); 
          }
      }


     





  

=======
 

   

  
      }
=======
  }
>>>>>>> da96520c0ca3badf55831cf93e03c8fc4e32da9d
>>>>>>> 9cde3f32a2ea65fea149fd83dda34821d603db61

<?php
require('konekcija.php');
    $data=array();
    $q = "SELECT * FROM korisnik";
    $r = @mysqli_query($dbc, $q); 
    $num = mysqli_num_rows($r);
    if ($num > 0) { 
      while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
          $data[]=$row;
      }
      mysqli_free_result ($r); 
    } 
  
    if(isset($_POST['btn']))
        {

          
            $email = $_POST['email'];
            $pass = $_POST['pass'];
           
           
            
              if($num>0){
              foreach($data as $value) {
                if(strtolower($email)==strtolower($value['EMAIL']) && strtolower($pass)==strtolower($value['PASSWORD']))
                {
                  $_SESSION["IME"] = $value['name'];
                  $_SESSION["PASSWORD"] = $value['pass'];
                  header("Location: ../index.php");
                }
              }
            }
            


          //  $email=$_POST['email'];
          //  $pass=$_POST['pass'];
          //  for($i=0;$i<count($data); $i++)
          //  {
          //      if($email == $i['EMAIL'] && $pass == $i['PASSWORD'])
          //      {
                    
            //        echo $i['IME'];
              //  }
                //else
                //{
                  //  echo 'Greska';
                //}
            //}
            
          
            
         } 
?>



<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/signup.css">

   
</head>
<body>
   <!--  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="img/about-1.jpg" alt="brica">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/about-1.jpg" alt="brica2">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="login.php" name="myFormLogIn" method="POST" onsubmit="return validacijalogin()">
 
    <section  id="loginback">
  <div class="container py-5 h-100" id="logi">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">Prijava</h3>
            <div class="form-outline mb-4">
              <input name="email" type="text" id="email" class="form-control form-control-lg" placeholder="Email" />
              <span id="error1"><label for=""></label></span>
            </div>
            <div class="form-outline mb-4">
              <input name="pass" type="password" id="pass" class="form-control form-control-lg" placeholder="Lozinka" />
              <span><label id="error2" for=""></label></span>
            </div>
            <input name="btn" class="btn btn-success btn-lg btn-block" type="submit" value="Prijavi se">
            <hr class="my-4">
            <p>Nemate nalog? <br>
           <a href="signup.php"> Registrujte </a> se brzo i lako?
            </p>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
          <form class="mx-1 mx-md-4" name="formSignIn" action="addUser.php" method="POST" onsubmit="return validacijasignup()">
                <div class="row justify-content-center">
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-10">
                  <div class="d-flex flex-row align-items-center">
                    <i class="fa-solid fa-user"></i>  
                    <div class="form-outline flex-fill mb-0 ml-auto mr-auto">
                      <input required type="text" name="name" id="name" class="form-control" placeholder="Ime"/>
                      <span id="error1"></span>
                    </div>
                  </div>
                
                </div>
                <div class="row justify-content-center">
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-10">
                  <div class="d-flex flex-row align-items-center">
                    <i class="fa-solid fa-user"></i>  
                    <div class="form-outline flex-fill mb-0 ml-auto mr-auto">
                      <input required type="text" name="surname" id="surname" class="form-control" placeholder="Prezime"/>
                      <span id="error1"></span>
                    </div>
                  </div>
                
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-10">
                  <div class="d-flex flex-row align-items-center">
                    <i id="fasovi" class="fa fa-envelope fa-lg  me-3  fa-fw"></i>
                    <div class="form-outline flex-fill mb-0  ml-auto mr-auto">
                      <input required type="email" name="email2" id="email2" class="form-control"  placeholder="Email" />
                      <span id="error2"></span>
                    </div>
                  </div>
                
              </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-10">
                  <div class="d-flex flex-row align-items-center">
                    <i id="fasovi" class="fa fa-phone fa-lg me-3  fa-fw"></i>
                    <div class="form-outline flex-fill mb-0  ml-auto mr-auto">
                      <input type="number" name="phone" id="phone" class="form-control" placeholder="Telefon" />
                    </div>
                  </div>
               
                </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-10">
                  <div class="d-flex flex-row align-items-center">
                    <i id="fasovi" class="fa fa-lock fa-lg me-3  fa-fw"></i>
                    <div class="form-outline flex-fill mb-0  ml-auto mr-auto">
                      <input required type="password" name="password" id="password" class="form-control" placeholder="Lozinka" />
                      <span id="error4"></span>
                    </div>
                  </div>
                
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-10">
                  <div class="d-flex flex-row align-items-center">
                    <i id="fasovi" class="fa fa-key fa-lg me-3  fa-fw"></i>
                    <div class="form-outline flex-fill mb-0  ml-auto mr-auto">
                      <input required type="password" name="password2" id="password2" class="form-control" placeholder="Potvrdite lozinku"/>
                      <span id="error5"></span>
                    </div>
                    </div>
              
                    </div>    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="d-flex flex-row align-items-center">
                    <div class="form-outline flex-fill mb-0  ml-auto mr-auto text-center">
                    <input type="submit" name="btnsign"  value="Registruj se" class="btn btn-success">
                    <span id="error1"></span>
                    <br>
                   <p style="font-size:13px;"> Imate već postojeći nalog? <br> Molim vas  <a href="login.php">ulogujte se!</a></p>
                    </div>
                  </div>
                  </div>
                    </div>
                    </div>
                </form>
    </div>
    </div>
    </div>
  </div> -->


 
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="../img/testimonial.jpg" alt="barber">
       <!-- <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div> -->
      </div>
      <div class="back">
        <img class="backImg" src="../img/portfolio-5.jpg" alt="barber">
       <!-- <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div> -->
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Log in</div>
            <form action="" name="myFormLogIn" method="POST" onsubmit="return validacijalogin()">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input name="email" type="text" id="email" class="form-control form-control-lg" placeholder="Email" />
              <span id="error1"><label for=""></label></span>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input name="pass" type="password" id="pass" class="form-control form-control-lg" placeholder="Lozinka" />
              <span><label id="error2" for=""></label></span>
              </div>
              
              <div class="button input-box">
              <input name="btn" class=" default_btn btn-lg" type="submit" value="Prijavi se">
              </div>
              <div class="text sign-up-text">Nemate nalog? <label for="flip">Registrujte se brzo i lako</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Sign up</div>
          <form class="mx-1 mx-md-4" name="formSignIn" action="addUser.php" method="POST" onsubmit="return validacijasignup()">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input required type="text" name="name" id="name" class="form-control" placeholder="Ime"/>
                      <span id="error1"></span>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input required type="text" name="surname" id="surname" class="form-control" placeholder="Prezime"/>
                      <span id="error1"></span>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input required type="email" name="email2" id="email2" class="form-control"  placeholder="Email" />
                      <span id="error2"></span>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="number" name="phone" id="phone" class="form-control" placeholder="Telefon" />
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input required type="password" name="password" id="password" class="form-control" placeholder="Lozinka" />
                      <span id="error4"></span>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input required type="password" name="password2" id="password2" class="form-control" placeholder="Potvrdite lozinku"/>
                      <span id="error5"></span>
              </div>
              <div class="button input-box">
              <input type="submit" name="btnsign"  value="Registruj se" class="btn btn-success">
                    <span id="error1"></span>
              </div>
              <div class="text sign-up-text">Već imate nalog? <label for="flip">Ulogujte se</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
<script>
  let korisnici =[];
  korisnici = <?php echo json_encode($data)?>;
  console.log(korisnici);
 
</script>

<script src="../js/mainluka.js"></script>

</body>
</html>

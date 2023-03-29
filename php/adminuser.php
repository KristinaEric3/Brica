<?php


require("funkcije.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/adminUser.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href=""><img src="../img/b11.png" class="logo" alt="Barbershop" style="width:45px; height:45px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item">
        <a class="nav-link" href="lazna.php"> <img src="../img/ico1.png" alt="home"> <!--<i id="faadmin" class="fa fa-2x fa-home mx-auto mb-2"></i>--> <span class="sr-only"></span></a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="adminusluge.php">  <img src="../img/icon2.png" alt="usluge" id="ikoniceNav"> <!-- <i id="faadmin" class="fa fa-2x fa-map-marker-alt mx-auto mb-2"></i>--> <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminzaposleni.php"> <img src="../img/ico3.png" alt="zaposleni" id="ikoniceNav"> <!--<i id="faadmin" class="fa fa-2x fa-image mx-auto mb-2"></i> --><span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminuser.php">  <img src="../img/iconn3.png" alt="korisnici" id="ikoniceNav">   <!--  <i id="faadmin" class="fa fa-2x fa-user mx-auto mb-2"></i><span class="sr-only"></i> --></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminorders.php"> <img src="../img/icon4.png" alt="rezervacija">  <!--  <i id="faadmin" class="fa fa-2x fa-shopping-bag mx-auto mb-2"></i>--> <span class="sr-only"></span></a>
      </li>
     <!-- <li class="nav-item">
        <a class="nav-link" href="#">    <i id="faadmin" class="fa fa-2x fa-user-cog mx-auto mb-2"></i> <span class="sr-only"></i></span></a>
      </li> -->
    </ul>
    <span ml-auto>
    <a href="admin/destroysesion.php" style="color:black;" type="button" class="btn btn-light">Odjava</a>
  </span>
  </div>
</nav>
<h2 class="text-center" id="adminNaslovi">KORISNICI</h2>
<!--<button onclick="prikaziKorisnike()"><i class="fa fa-2x fa-plus"></i></button> -->
<div id="prikazKorisnika"></div>
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>IME</th>
						      <th>PREZIME</th>
						      <th>EMAIL</th>
                              <th>TELEFON</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
                          <tr class="alert" role="alert">
						    	
                          <?php
                     prikaziKorisnike();
                          ?>
                         </tbody>
                    </table>

<!--
<table class="table">
  <thead class="table-dark">
   <tr>
    <th>#</th>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Email</th>
    <th>Phone</th>
   <th></th>
   </tr>
  </thead>
  <tbody>
   <?php
    prikaziKorisnike();
   ?>
  </tbody>
</table> -->
<script src="../js/mainluka.js"></script>
<script src="../js/adminUser.js"></script>
</body>
</html>
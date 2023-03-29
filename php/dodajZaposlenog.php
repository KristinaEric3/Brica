<?php
require "funkcije.php";
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
    <link href="../css/main.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <form action="addZaposlenog.php" class="m-5" method="post" onsubmit="return validacijaAddZaposlenog()">
    <h2>Novi Zaposleni</h2>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-2">
        <div class="form-group">
          <input type="text" name="imeZaposlenog" required class="form-control" id="imeZaposlenog" aria-describedby="emailHelp" placeholder="Ime">
        <small id="errorimeZaposlenog">Minimum 3 karaktera!</small>
        </div>
        </div>
        <div class="col-sm-12 col-md-2">
        <div class="form-group">
            <input type="text"  name="prezimeZaposlenog" required class="form-control" id="prezimeZaposlenog" placeholder="Prezime">
            <small id="errorprezimeZaposlenog">Minimum 3 karaktera!</small>
        </div>
        </div>
        <div class="col-sm-12 col-md-2">
        <div class="form-group">
            <input type="text"  name="emailZaposlenog" required class="form-control" id="emailZaposlenog" placeholder="Email">
            <small id="erroremailZaposlenog"></small>
        </div>
    </div>
    <div class="col-sm-12 col-md-2">
        <div class="form-group">
            <input type="text"  name="phoneZaposlenog" required class="form-control" id="phoneZaposlenog" placeholder="Telefon">
            <small id="errorphoneZaposlenog"></small>
        </div>
    </div>
        <div class="col-sm-12 col-md-3">
        <div class="form-group">
        <input type="submit" class="btn dugmeDodaj" value="Dodaj">
        </div>
        </div>
    </div>
   </form>
   <script src="../js/mainluka.js"></script>
</body>
</html>
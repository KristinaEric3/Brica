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
   <form action="addUsluge.php" class="m-5" method="post" onsubmit="return validacijaaddUsluga()">
    <h2>Nova Usluga</h2>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-3">
        <div class="form-group">
          <input type="text" name="nazivUsluge" required class="form-control" id="nazivUsluge" aria-describedby="emailHelp" placeholder="Naziv">
        <small id="errornazivUsluge">Minimum 10 karaktera!</small>
        </div>
        </div>
        <div class="col-sm-12 col-md-3">
        <div class="form-group formcenavreme">
            <input type="number"  name="cenaUsluge" required class="form-control" id="cenaUsluge" placeholder="Cena">
            <small id="errorcenaUsluge">Minimum 2 karaktera!</small>
        </div>
        </div>
        <div class="col-sm-12 col-md-3">
        <div class="form-group formcenavreme" >
            <select class="form-select" id="selectUsluge"  name="vremeUsluge" >
                <option selected>Vreme</option>
              <?php selectUsluge();?>
              </select>
              <small id="errorvremeUsluge">Ovo polje je obavezno!</small>
        </div>
    </div>
        <div class="col-sm-12 col-md-3">
        <div class="form-group">
        <input type="submit" class="btn  dugmeDodaj" value="Dodaj">
        </div>
        </div>
    </div>
   </form>
   <script src="../js/mainluka.js"></script>
</body>
</html>
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
    <title>Document</title>
</head>
<body>
   <form action="AddUsluge" class="m-5" method="post">
    <h2>Nova Usluga</h2>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-3">
        <div class="form-group">
          <input type="text" name="nazivUsluge" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Naziv">
        </div>
        </div>
        <div class="col-sm-12 col-md-2">
        <div class="form-group">
            <input type="number" name="cenaUsluge" required class="form-control" id="exampleInputPassword1" placeholder="Cena">
        </div>
        </div>
        <div class="col-sm-12 col-md-2">
        <div class="form-group" >
            <select class="form-select" id="selectUsluge" name="vremeUsluge" >
                <option selected>Vreme</option>
              <?php selectUsluge();?>
              </select>
        </div>
    </div>
        <div class="col-sm-12 col-md-2">
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </div>
   </form>
   <script src="../js/main.js"></script>
</body>
</html>
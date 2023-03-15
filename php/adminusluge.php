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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href=""><img src="" alt="" style="width:45px; height:45px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item">
        <a class="nav-link" href="lazna.php">  <i id="faadmin" class="fa fa-2x fa-home mx-auto mb-2"></i> <span class="sr-only"></span></a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="adminusluge.php">   <i id="faadmin" class="fa fa-2x fa-map-marker-alt mx-auto mb-2"></i> <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admingalery.php">  <i id="faadmin" class="fa fa-2x fa-image mx-auto mb-2"></i> <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminuser.php">      <i id="faadmin" class="fa fa-2x fa-user mx-auto mb-2"></i><span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminorders.php">     <i id="faadmin" class="fa fa-2x fa-shopping-bag mx-auto mb-2"></i> <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">    <i id="faadmin" class="fa fa-2x fa-user-cog mx-auto mb-2"></i> <span class="sr-only"></span></a>
      </li>
    </ul>
    <span ml-auto>
    <a href="admin/destroysesion.php" style="color:black;" type="button" class="btn btn-light">Odjava</a>
  </span>
  </div>
</nav>

<button onclick="dodajUslugu()"><i class="fa fa-2x fa-plus"></i></button>
<div id="prikazUsluge"></div>
<script src="../js/main.js"></script>
</body>
</html>
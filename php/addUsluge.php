<?php

    require_once("konekcija.php");

    $naziv = $_POST['nazivUsluge'];
    $vreme = $_POST['vremeUsluge'];
    $cena = $_POST['cenaUsluge'];
    $q = "INSERT INTO `usluge` (`NAZIVUSLUGE`,`VREMEUSLUGE`,`CENAUSLUGE`) VALUES ('$naziv','$vreme','$cena')";
    $r = mysqli_query($dbc,$q);
    if($r)
    {
        header("Location:adminusluge.php");
    }
    else
    {
        echo 'Greska u mysqli addUsluge!';
    }

    ?>
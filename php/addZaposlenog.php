<?php

    require_once("konekcija.php");

    $ime = $_POST['imeZaposlenog'];
    $prezime = $_POST['prezimeZaposlenog'];
    $email = $_POST['emailZaposlenog'];
    $tell = $_POST['phoneZaposlenog'];
    $q = "INSERT INTO `zaposleni` (`IMEZAPOSLENOG`,`PREZIMEZAPOSLENOG`,`EMAIL`,`PHONE`) VALUES ('$ime','$prezime','$email','$tell')";
    $r = mysqli_query($dbc,$q);
    if($r)
    {
        header("Location:adminzaposleni.php");
    }
    else
    {
        echo 'Greska u mysqli addZaposlenog!';
    }

    ?>
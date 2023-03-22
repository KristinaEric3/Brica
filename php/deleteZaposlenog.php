<?php
require_once("konekcija.php");
   
   $id = $_COOKIE['idZaposlenogDelete'];
   $q = "DELETE FROM `zaposleni` WHERE $id = IDZAPOSLENOG";
    $r = mysqli_query($dbc,$q);
    if($r)
    {
      header("Location:adminzaposleni.php");
        
    }else{
            echo 'Greska u MYSQL upitu!';
        }
    
    ?>
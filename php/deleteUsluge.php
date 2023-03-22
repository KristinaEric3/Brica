<?php
require_once("konekcija.php");
   
   $id = $_COOKIE['idUslugeDelete'];
   $q = "DELETE FROM `usluge` WHERE $id = IDUSLUGE";
    $r = mysqli_query($dbc,$q);
    if($r)
    {
      header("Location:adminusluge.php");
        
    }else{
            echo 'Greska u MYSQL upitu!';
        }
    
    ?>
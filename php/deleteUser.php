<?php

    
        require_once("konekcija.php");
           
           $id = $_COOKIE['idKorisnikaDelete'];
           $q = "DELETE FROM korisnik WHERE $id = IDUSER";
            $r = mysqli_query($dbc,$q);
            if($r)
            {
              header("Location:adminuser.php");
                
            }else{
                    echo 'Greska u MYSQL upitu!';
                }
            
        

    ?>
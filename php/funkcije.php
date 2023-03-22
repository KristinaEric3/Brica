<?php


function selectUsluge(){
    for($i=5;$i<180;$i+=5)
    {
        echo '<option value="'.$i.'">'.$i.' min</option>';
    }
}

function prikazUsluge(){
   
    require ("konekcija.php");
    $usluge = array();
    $q = "SELECT * FROM `usluge`";
    $r = mysqli_query($dbc,$q);
    if($r)
    {
        $num = mysqli_num_rows($r);
        if($num>0)
        {
            while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
            {
                $usluge[] = $row;
                echo ' <div class="col-md-12">
                <label class="labelInputi" for="'.$row['IDUSLUGE'].'">
                <input name="uslugeRadio" type="radio" id="'.$row['IDUSLUGE'].'">
                <p>'.$row['NAZIVUSLUGE'].'</p>
               <p class="cenaUsluge">'.$row['CENAUSLUGE'].'</p>
                </label>
        </div>';
            }
        }else{
            echo 'Greska u broju redova u DB!';
        }
    }
    else
    {
    echo 'Greska u mysqli addUsluge!';
    }
}

function prikazUslugeAdmin(){
   
    require ("konekcija.php");
    $usluge = array();
    $q = "SELECT * FROM `usluge`";
    $r = mysqli_query($dbc,$q);
    $br =0;
    if($r)
    {
        $num = mysqli_num_rows($r);
        if($num>0)
        {
            while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
            {
                $usluge[] = $row;
                echo '     <tr>
                <td>'.($br+1).'</td>
                <td>'.$row['NAZIVUSLUGE'].'</td>
                <td>'.$row['CENAUSLUGE'].' RSD</td>
                <td>'.$row['VREMEUSLUGE'].' min</td>
                <td>
                <button class="btn"><i class="fas fa-edit"></i></button>
                <button onclick="obrisiUslugu('.$row['IDUSLUGE'].')" class="btn"><i class="fas fa-trash"></i></button>
                </td>
                </tr>';
                $br ++;
            }
           
        }else{
            echo 'Greska u broju redova u DB!';
        }
      
    }
    else
    {
    echo 'Greska u mysqli addUsluge!';
    }
}


function prikaziZaposleneAdmin(){
   
    require("konekcija.php");
    $zaposleni = array();
    $q = "SELECT * FROM `zaposleni`";
    $r = mysqli_query($dbc,$q);
    $br =0;
    if($r)
    {
        $num = mysqli_num_rows($r);
        if($num>0)
        {
            while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
            {
                $zaposleni[] = $row;
                echo ' <tr id="'.$row['IDZAPOSLENOG'].'">
                <td>'.($br+1).'</td>
                <td class="ime">'.$row['IMEZAPOSLENOG'].'</td>
                <td>'.$row['PREZIMEZAPOSLENOG'].'</td>
                <td>'.$row['EMAIL'].'</td>
                <td>'.$row['PHONE'].'</td>
                <td>
                <button onclick="izmeniZaposlenog('.$row['IDZAPOSLENOG'].')" class="btn"><i class="fas fa-edit"></i></button>
                <button onclick="obrisiZaposlenog('.$row['IDZAPOSLENOG'].')" class="btn"><i class="fas fa-trash"></i></button>
                </td>
                </tr>';
                $br ++;
            }
        }else
        {
            echo '<div>Nema podataka za prikaz!</div>';
        }
    }
    else
    {
    echo 'Greska u mysqli addUsluge!';
    }
    echo '<script>
                let zaposleni = ';echo json_encode($zaposleni); echo ' ;
            </script> 
            ';
}




function prikaziSlobodneTermin(){

   
}

function izvuci(){
    require("konekcija.php");
    $zaposleni = array();
    $q = "SELECT * FROM `zaposleni`";
    $r = mysqli_query($dbc,$q);
    $br =0;
    if($r)
    {
        $num = mysqli_num_rows($r);
        if($num>0)
        {
            while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
            {
                $zaposleni[] = $row;
            }
        }
    }
    else
    {
    echo 'Greska u mysqli addUsluge!';
    }
    echo '<script>
                let zaposleni = ';echo json_encode($zaposleni);' <br>
            </script>
            ';
}


?>


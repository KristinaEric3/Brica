<?php

require('konekcija.php');
$name=$_POST['name'];
$surname=$_POST['surname'];
$email2=$_POST['email2'];
$phone=$_POST['phone'];
$pass=$_POST['password'];
$q = "INSERT INTO korisnik (IME, PREZIME, EMAIL, PHONE, PASSWORD)
VALUES ('$name', '$surname', '$email2', '$phone', '$pass')";
$r = @mysqli_query($dbc, $q); 
if ($r) {
    header('Location: loginn.php');
} 
    
 



?>
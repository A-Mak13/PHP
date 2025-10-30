<?php
$email= '/[-\w.]+@([A-z0-9][-A-z0-9)+\.)+[A-z]*/';
$tekst="mail: kontakt@o2.pl";
if(preg_match($email,$tekst))
    echo("znaleziono podany wzorzec");
else
    echo("nie znaleziono");
?>
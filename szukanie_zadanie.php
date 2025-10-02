<?php
$wyrazenie='/\d\d\d\d\d/';
$tekst="telefon 777204656";
if(preg_match($wyrazenie,$tekst))
    echo("znaleziono podany wzorzec");
else
    echo("nie znaleziono");
?>
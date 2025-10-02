<?php
$wyrazenie= '/\d{2}-\d{3}/';
$tekst= "34-200 Sucha beskidzka";
if(preg_match($wyrazenie,$tekst))
    echo("znaleziono podany wzorzec");
else
    echo("nie znaleziono");
?>
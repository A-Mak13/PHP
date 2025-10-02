<?php
$wzorzec_daty='/[0123]?\d[-\ \/\.][01]?\d[-\/\/.]\d{4}/';
$tekst="sucha beskidzka, 21.11.2024";
if(preg_match($wzorzec_daty,$tekst))
    echo("znaleziono podany wzorzec");
else
    echo("nie znaleziono");
?>
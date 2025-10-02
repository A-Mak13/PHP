<?php
$wyrazenie= '/\S*\.gif/i';
$tekst= "ikona jest w logo.gif";
if(preg_match($wyrazenie,$tekst))
    echo("znaleziono podany wzorzec");
else
    echo("nie znaleziono");
?>
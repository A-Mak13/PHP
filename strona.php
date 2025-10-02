<?php
$wzorzec_www='/(https?:\/\/) | (www\.)) \S*\.[A-z]*/';
$tekst="adres szkoły: https://zsgsucha.pl";
if(preg_match($wzorzec_www,$tekst))
    echo("znaleziono podany wzorzec");
else
    echo("nie znaleziono");
?>
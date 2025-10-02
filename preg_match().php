<?php
$wyrazenie='/byc/';
$tekst= "byc albo nie byc";
if(preg_match($wyrazenie, $tekst))
    echo ("znaleziono podany wzorzec.")
else
    echo("nie znaleziono podanego wzorca");
?>
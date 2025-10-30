<?php
$tekst = 'Witaj Świecie!';
$wymiana = '/Świecie/i';
echo preg_replace($wymiana, 'World', $tekst);
?>

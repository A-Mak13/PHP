<?php
$a= 3; // przypisanie 3
$b= &$a; //b referencja do a

print "$a\n"; // 3
print "$b\n"; //3

$a= 4; //nadpisanie a=4

print "$a\n"; //4
print "$b\n"; //4

?>
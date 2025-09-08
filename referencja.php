<?php
$foo= 'bob';
$bar= &$foo;
$bar= 'andy';
echo $bar;
echo $foo;
?>
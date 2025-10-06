<?php
class Fruit{
    public $name;
    protected $color;
    private $weight;
}

$mango= new Fruit();
$mango->name= 'mango';
$mango->color= 'yellow'; //error
$mango->weight= '300'; //error
?>
<?php
class Auto{
    private $marka;
    private $model;
    public $moc;
    function __construct($moc){
        $this->moc=$moc;
    }
    function __destruct(){
        echo "Auto ma moc {$this->moc}.";
    }
}
$Fiacik = new Auto("Fiat");
$Fiacik->model="panda";
$Fiacik->moc= "95KM";
$Fiacik->marka="fiat";
?>

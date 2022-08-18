<?php

class Car {
  public $priimek = "Ali";
  protected $ime = "Janja";

}

$imeNaObject = new Car;
echo $imeNaObject->priimek;
echo $imeNaObject->ime;

?>


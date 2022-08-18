<?php

class Car {
  public $boja;
  

  function set_boja ($boja) {
    $this->boja = $boja;
    echo  "Ova e bojata " . $this->boja;
  }
}

$ImeNaBoja = new Car;
$ImeNaBoja->set_boja("zelena");



 ?> 
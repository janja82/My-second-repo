<?php
class Televizor{
	
	private $Philips = 'slika';
	 //private $Samsung = 'zvok';

	 //getting da se pridobi ali da se zema vrednost object
	public function getName() {
		return $this->Philips;
	}

	// public function getName1() {
	// 	return $this->Samsung;
	// } 

	 //setting, da se dade vrednost, postavi, nastavi, definira katero vrednost naj dobi object 
	public function setName($newName){
	 	$this->Philips = $newName;
	 }

	 // public function setName1($novoIme) {
	 // 	$this->Samsung = $novoIme;
	 // }
	 
}	

//izven class naredimo objeck

$object = new Televizor();
echo 'Namestiv ' . $object -> getName();

$object->setName ('daljinsko');
echo ' z ' . $object->getName();


// $objectSamsung = new Televizor();
// echo 'Z ' . $objectSamsung -> getName1();

// $objectSamsung setName1 ('hdmi');
// echo ' namestiv ' . $objectSamsung -> getName1;

?>



<?php
class Televizor{
	
	private $Philips = 'slika';

	 //getting da se pridobi ali da se zema vrednost object
	public function getName() {
		return $this->Philips;
	}

	 //setting, da se dade vrednost, postavi, nastavi, definira katero vrednost naj dobi object 
	public function setName($newName){
	 	$this->Philips = $newName;
	 }
	 
}	

//izven class naredimo objeck

$object = new Televizor();
echo 'Namestiv ' . $object -> getName();

$object->setName ('daljinsko');
echo ' z ' . $object->getName();

?>



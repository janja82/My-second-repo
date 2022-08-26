<?php
class Televizor{
	

	private $Samsung = 'zvok';

	 //getting da se pridobi ali da se zema vrednost object
	public function getName1() {
		return $this->Samsung;
	} 

	 //setting, da se dade vrednost, postavi, nastavi, definira katero vrednost naj dobi object 
	public function setName1($novoIme) {
	 	$this->Samsung = $novoIme;
	 }
	 
}	


$objectSamsung = new Televizor();
echo 'Z ' . $objectSamsung -> getName1();

$objectSamsung->setName1 ('hdmi');
echo ' namestiv s ' . $objectSamsung->getName1();

?>
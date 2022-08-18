<?php
class Ime{
	//atribute = vrednost
	 private $korisnik = 'Bastrijan';

	 //setting, nastavi, definira katero vrednost naj dobi object 
	 public function setName($noviKorisnik){
	 	$this->korisnik = $noviKorisnik;
	 }
	 //getting da pridobi ali povrne vrednost object
	public function getName() {
		return $this->korisnik;
	}
}	

//izven class naredimo objeck

$object = new Ime();
echo $object -> getName();

$object->setName ('Janja');
echo $object->getName();

?>
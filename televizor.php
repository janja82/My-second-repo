<?php 
class Televizor{

	private $zvok = 'zvok';
	private $slika = 'slika';

	public function getZvok() {
		return $this->zvok;
	}
	public function setZvok($zvok) {
		$this->zvok = $zvok;
	}

	public function getSlika() {
		return $this->slika;
	}
	public function setSlika($slika) {
		$this->slika = $slika;
	}
}

$Philips = new Televizor();
echo $Philips->getZvok() ;
$Philips->setZvok ('racno');
echo ' se nastavlja ' . $Philips->getZvok();
echo '<br>';
echo $Philips->getSlika();
$Philips->setSlika ('HDMI');
echo ' se prikazuva preko ' . $Philips->getSlika();



?>
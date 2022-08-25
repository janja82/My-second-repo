<?php 

// ovoj del go pisuvam jaz
class Televizor {
	private $slika;
	private $zvok;

	public function __construct ($slikaValueCons , $zvokValueCons){
		$this->slika=$slikaValueCons;
		$this->zvok=$zvokValueCons;
	}

	public function getSlika() {
		return $this->slika;
	}
	public function setSlika($slikaValue){
		$this->slika = $slikaValue;
	}

	public function getZvok() {
		return $this->zvok . ' jak ';
	}
	public function setZvok($zvokValue){
		$this->zvok = $zvokValue;
	}	
}


// ======================================
//ovoj del go pisuva drug programer

$samsungTv = new Televizor('sanjsko morje' , 'sumenje valov');
echo $samsungTv->getSlika() . ':' . $samsungTv->getZvok();

$samsungTv->setSlika('tekma kosarka');
$samsungTv->setZvok('zvok od tekme');
echo $samsungTv->getSlika() . '-' . $samsungTv->getZvok();


// echo $samsungTv->getSlika();
// $samsungTv->setSlika('daljinsko');
// echo ' se nastavlja z ' . $samsungTv->getSlika();
// echo '<br>';
// echo $samsungTv->getZvok();
// $samsungTv->setZvok('HDMI');
// echo ' se regulira z ' . $samsungTv->getZvok();
// echo '<br>' . '<br>';

// $philipsTv = new Televizor;
// echo $philipsTv->getSlika();
// $philipsTv->setSlika('racno');
// echo ' se tukaj nastavlja ' . $philipsTv->getSlika();
// echo '<br>';
// echo $philipsTv->getZvok();
// $philipsTv->setZvok('mute');
// echo ' se stavi na ' . $philipsTv->getZvok();

?>
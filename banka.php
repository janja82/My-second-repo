<?php

class Person {
	private $name;


	public function __construct ($nameValueCons)
	{
		$this->name=$nameValueCons;
	}

	public function getName() 
	{
		return $this->name;
	}

	public function setName($nameValue)
	{
		$this->name = $nameValue;
	}

	public function Razlika($a, $b = '30')
	{
		return $a - $b;
	}

	public function Suma($a, $b = '30')
	{
		return $a + $b;
	}

	public function getSentence() 
	{
		return ucfirst ($this->getName ()) . ' ima ';

	}


}














//od tuka pravi Bastri
$janja = new Person('janja');
//echo ($janja->getName() . 'ima');
echo ($janja->getSentence());
echo ($janja->Razlika('100') . "<br>");

$bastri = new Person ('bastri');
echo ($bastri->getSentence());
echo ($bastri->Suma('200'));

?>
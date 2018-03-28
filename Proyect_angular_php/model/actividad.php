<?php

	/**
	* 
	*/
class Actividad{
	private $keyAct;
	private $cveAct;
	private $descAct;

	function __construct(argument)
	{
		# code...
	}

	public function setKeyAct($pKeyAct){
		$this->keyAct = $pKeyAct;
	}

	public function getKeyAct(){
		return $this->keyAct;
	}

	public function setCveAct($pCveAct){
		$this->CveAct = $pCveAct;
	}

	public function getCveAct(){
		return $this->cveAct;
	}

	public function setDescAct($pDescAct){
		$this->DescAct = $pDescAct;
	}

	public function getDescAct(){
		return $this->DescAct;
	}
}

?>
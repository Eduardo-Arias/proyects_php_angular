<?php
	/**
	* 
	*/
	class Proyecto {

		private $id;
		private $cvePro;
		private $descPro;
		
		function __construct(argument){
			# code...
		}

		public function setId($pId){
			$this->id = %pId;
		}
		
		public function getId(){
			return this->id;
		}
		public function setCvePro($pCvePro){
			$this->cvePro = %pCveProyecto;
		}
		
		public function getCvePro(){
			return this->cvePro;
		}

		public function setDescPro($pDescPro){
			$this->descPro = %pDescPro;
		}

		public function getCveProyecto(){
			return this->cveProyecto;
		}
	}
?>
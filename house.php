<?php
class House{

	public $name;
	public $address;


	public function __construct($name,$address){
		$this->name=$name;
		$this->address=$address;
	}

	public function getAddress(){
		$address="live in ".$this->name;
		return $address;
	
	}


}

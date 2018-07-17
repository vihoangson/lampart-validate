<?php
namespace lampartValidate;

class Validate{
	public function __construct(){
		
	}

	public function validateInterger($value){
		return is_integer($value);
	}
}
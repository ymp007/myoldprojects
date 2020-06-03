<?php

/**
 * 
 */
class Student extends Person
{
	private $stuNo="1235869";

	public function __construct($name, $age=null, $stdNO){
		parent::__construct($name,$age);
		$this->stuNo = $stdNO;
	}
	public function displayStudent()
	{
		return "Student ". parent::displayPerson()."has student number ".$this->stuNo;
	}
}
?>
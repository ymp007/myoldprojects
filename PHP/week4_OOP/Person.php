<?php
//Person Class
class Person
{
	private $name;
	private $age;
	private $gender;
	const MALE = 'm';
	const FEMALE = 'f';

	//constructer
	public function __construct($name,$age){
		$this->name = $name;
		$this->age = $age;
	}
	//destructer
	public function __destruct(){
		//echo "<br>object destroyed";
	}
	//getter setter
	public function setName($value){
		$this->name=$value;
	}
	public function getName(){
		return $this->name;
	}
	public function setGender($value){
		if($value == self::MALE||$value == self::FEMALE){
			$this->gender=$value;	
		}
		
	}
	public function getGender(){
		return $this->gender;
	}
	//display function
	public function displayPerson()
	{
		return $this->name." is ".$this->gender." with ".$this->age." Years age ";
	}
}

?>
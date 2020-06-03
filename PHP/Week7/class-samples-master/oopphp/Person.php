<?php
/**
 * Created by PhpStorm.
 * User: anama
 * Date: 2019-09-26
 * Time: 11:31 AM
 */

class Person
{
   protected $name;
   private $age;
   const MALE = 'm';
   const FEMALE = 'f';
   private $gender;

   public function __construct($name, $age= null)
   {
       $this->setName($name);
       $this->age = $age;
   }

   public function setGender($value){
       if($value == self::MALE || $value == self::FEMALE){
           $this->gender = $value;
       }
   }
   public function getGender(){
       return $this->gender;
   }

   public function __destruct()
   {
       //echo  "object destroyed";
   }

    public function setName($value){
       $this->name = $value;
    }
   public function getName(){
       return $this->name;
   }

    public function displayPerson(){
       return $this->name . " is " . $this->age . " years old";
   }
}


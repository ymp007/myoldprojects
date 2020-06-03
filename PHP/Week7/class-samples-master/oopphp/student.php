<?php
/**
 * Created by PhpStorm.
 * User: anama
 * Date: 2019-09-26
 * Time: 12:26 PM
 */

class student extends Person
{
    private $stunum = '111111';

    public function __construct($name, $age = null, $stnum)
    {
        parent::__construct($name, $age);
        $this->stunum = $stnum;
    }

    public function  displayStudent(){
        return "Student " . $this->name . ' : ' . parent::displayPerson();
    }

}
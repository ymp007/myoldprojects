<?php
$name="";
$email="";
$question="";
$radioError="";
function populateDropdown(){
$Subjects = ["PHP","Ios Development","Android","J2ee"];
$data="";
$selectedsub="";
if(isset($_POST['subject'])){
		echo $selectedsub=$_POST['subject'];
}
foreach ($Subjects as $key => $value) {
	if($selectedsub==$value){
	 $data=$data."<option value=".$value." selected>".$value."</option>";
	}else{
		$data=$data."<option value=".$value.">".$value."</option>";
	}
}
return $data;	
}

function checkRadio(){
	$radioArray = ["yes","no"];
	$output="";
	$flag=false;
	global $radioError;
if(isset($_POST['response'])){
		foreach ($radioArray as $key => $value) {
		$selected=$_POST['response'];
		if($value==$selected){
		 	$flag=true;
			$output=$output."<input type ='radio' name='response' value='".$value."' checked/>".$value; 
		}else{
			$output=$output."<input type ='radio' name='response' value='".$value."'/>".$value;
		}
}

}else{
	foreach ($radioArray as $key => $value){
		$output=$output."<input type ='radio' name='response' value='".$value."'/>".$value;
	}
}
if(!$flag){
	$radioError="&nbsp   (Please choose one)";
}
return $output;	
}

function checkName(){
$nameError="";	 
if (isset($_POST['name'])) {
		global $name; 
		$name = $_POST['name'];
		$namePattern = "/[a-zA-Z]{2,10}/";
		if($name===""){
			$nameError="Please Enter Name";
		}else if (!preg_match($namePattern, $name)) {
			$nameError="Please Enter Valid Name";
		}
	}
	return $nameError;
}

function checkMail(){
global $email;
$emailError="";
if(isset($_POST['email'])){
$email = $_POST['email'];
if($email===""){
	$emailError="Please Enter Email";
}elseif (!filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL)) {
	$emailError="Please Enter Valid Email";
}}	
return $emailError;
}
function checkBox(){
	$checkboxArray = ["Assignment","Lab","Class"];
	$output="";
if(isset($_POST['check_list'])){
	if(!empty($_POST['check_list'])){
		foreach ($checkboxArray as $key => $value) {
			$flag=false;
		
		foreach ($_POST['check_list'] as $selected) {
		
		if($value==$selected){
			$flag=true;

			$output=$output."<input type ='checkbox' name='check_list[]' value='".$value."' checked/>".$value."<br>"; 
		}
		}
		if(!$flag){
			$output=$output."<input type ='checkbox' name='check_list[]' value='".$value."'/>".$value."<br>";
		}
	}
}
}else{
	foreach ($checkboxArray as $key => $value){
		$output=$output."<input type ='checkbox' name='check_list[]' value='".$value."'/>".$value."<br>";
	}
}
return $output;
}

function checkDropdown(){
	if(isset($_POST['subject'])){
	echo $selectedoption = $_POST['subject'];
}
}
function checkQuestion(){
	$questionError="";
if(isset($_POST['question'])){
	global $question;
$question = $_POST['question'];
if($question===""){
	$questionError="Please Enter Question";
}}
return $questionError;
}

$questionError=checkQuestion();
$nameError=checkName();
$emailError=checkMail();
?>
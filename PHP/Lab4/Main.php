
<!DOCTYPE html>
<html>
<head>
	<title>Ask Question</title>
	<link rel="stylesheet" type="text/css" href="css/main1.css">
</head>
<body>
<?php
function display_navigation($link_Array){
 $put="";
foreach ($link_Array as $key => $value) {
	$put=$put."<li><a href=".$value.">".$key."</a></li>";
}
return $put;
}
include 'Header.php';
include "Form.php";
include 'Footer.php';
 ?>
</body>
</html>
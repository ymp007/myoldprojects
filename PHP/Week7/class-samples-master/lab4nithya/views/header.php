<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Sign Up</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css"/>
</head>

<body>
<header>
<?php
$header_menu = [
    "Home"=>"index.php",
    "News"=>"news.php",
    "Contact"=>"contact.php",
    "About"=>"about.php"
];
echo displayNavigation($header_menu);
?>
</header>

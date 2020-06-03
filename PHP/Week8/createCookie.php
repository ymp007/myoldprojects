<?php
$name = 'language';
$value = 'PHP';
$exda = new Datetime('+ 1 month');

setcookie($name,$value,$exda->getTimestamp(),"/","localhost",false, true);
?>
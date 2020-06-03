<?php

//register autoloader

spl_autoload_register(function($class){
    $classpath = 'Classes/' . $class . ".php";
    require_once $classpath;
});

$a = new Usera();

var_dump(get_included_files());

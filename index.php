<?php

spl_autoload_register(function ($className) {
    $className = str_replace("App", "classes", $className);
    $className = str_replace("\\", "/", $className);
    $className .= '.php';
    require_once $className;
});
//require 'classes/Calcul.php';

$instance = new App\Calcul();

$resultat = $instance->addtionner(10, 20);

var_dump($resultat);

echo "Hello world!";

<?php


require "vendor/autoload.php";
$instance = new App\Calcul();

$resultat = $instance->addtionner(10, 20);

var_dump($resultat);

echo "Hello world!";

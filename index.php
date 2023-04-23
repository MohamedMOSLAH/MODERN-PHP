<?php

use Carbon\Carbon;

require "vendor/autoload.php";

$instance = new App\Calcul();

$aujourdhui = Carbon::now();

var_dump($aujourdhui->format('d/m/Y'));
$resultat = $instance->addtionner(10, 20);

var_dump($resultat);

echo "Hello world!";

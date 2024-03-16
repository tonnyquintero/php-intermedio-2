<?php

require ("vendor/autoload.php");

use App\Classes\Perritu;
use App\Classes\Michi;

$firulais = new Perritu();
$mr_michi = new Michi();

echo $firulais->bark() . "\n";
echo $firulais->play() . "\n";

echo $mr_michi->sayMeow() . "\n";
echo $mr_michi->sleep() . "\n";



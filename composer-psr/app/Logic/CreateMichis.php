<?php

use App\Classes\Michi;
use App\Classes\MichisAdoptados;

function createMichis() {
    $mr_michi = new Michi("Mr. Michi", "Blanco", 16);
    $mr_michi_adopted = new MichisAdoptados("Mr. Michi", new DateTime("2023-04-16"),
    "Retaxito");

    echo $mr_michi->sayMeow() . " Me adoptó 
    {$mr_michi_adopted->getAdopted_by()}";
}
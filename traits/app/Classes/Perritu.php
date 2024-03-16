<?php

namespace App\Classes;

use App\Traits\Pet;


class Perritu {

    use Pet;

    public function bark() {
        return "woof";
    }

    public function drool() {
        return "babing";
    }
}
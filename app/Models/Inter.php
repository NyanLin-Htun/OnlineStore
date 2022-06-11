<?php

namespace App\Models;

use App\Interfaces\B;
use App\Traits\HelloWorld;

class Inter implements B{
    use HelloWorld;
    // public static function callA()
    // {
    //     echo 'Calling A Method';
    // }
}
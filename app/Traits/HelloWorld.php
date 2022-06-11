<?php

namespace App\Traits;
trait HelloWorld {
    public static function sayHello()
    {
        echo 'Hello World';
    }
    public static $my_static = 'static var';

    public static function callA() {
        return 'Calling A Method';
    }


}
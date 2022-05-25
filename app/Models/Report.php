<?php

namespace App\Models;
use App\Models\Order;
use App\Traits\HelloWorld;
use HelloWorld as GlobalHelloWorld;

class Report extends Order {
    use HelloWorld;
    public function reduceQty()
    {
        return $this->balanceItem();
    }
}
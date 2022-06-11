<?php

namespace App\Models;
use App\Models\Order;
use App\Traits\HelloWorld;
use HelloWorld as GlobalHelloWorld;

class Report extends Order {
    use HelloWorld;
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
        echo "construct {$this->id}\n";
    }
    public function __destruct()
    {
        echo "destruct {$this->id}\n";
    }
    public function reduceQty()
    {
        return $this->balanceItem();
    }
    public static function reduceBalance(){
        return 'Reduce Balance';
    }
    const CONSTANT = 'constant value';
    

}
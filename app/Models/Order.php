<?php

namespace App\Models;

class Order{
    public $order_id = 1;
    private function confirmOrder()
    {
        return "Confirm Order";
    }
    protected function balanceItem()
    {
        return $this->confirmOrder();
    }

}
<?php


namespace App\Services;


use App\Models\Order;

class OrderService
{
    public function getAll(){
        Order::all();
    }

}

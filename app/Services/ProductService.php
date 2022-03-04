<?php


namespace App\Services;


use App\Models\Order;
use App\Models\Product;

/**
 * Class ProductService
 * @package App\Services
 */
class ProductService
{
    // Get all data between two dates with specific day
    // ['2022-03-03','2022-03-05']
    public function getAll($from, $to, $day){

        return response()->json(['data'=>Order::with(['product'])
                ->whereBetween('created_at',[$from, $to])
                ->whereRaw('WEEKDAY(created_at) = '.$day)
                ->get()
        ]);
    }

}

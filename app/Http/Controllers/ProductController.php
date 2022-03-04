<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
class ProductController extends Controller
{
    /**
     * @var ProductService $productService
     */
    protected ProductService $productService;

    /**
     * ProductController constructor.
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function getAllProducts(Request $request){
        return ProductService::getAll($request->from,$request->to,$request->day);
    }
}

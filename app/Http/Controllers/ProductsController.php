<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::get();
    }
    public function show($productID)
    {
        return Product::where('id', $productID)->first();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Product 1', 'price' => 1000],
            ['id' => 2, 'name' => 'Product 2', 'price' => 2000],
            ['id' => 3, 'name' => 'Product 3', 'price' => 1500],
            ['id' => 4, 'name' => 'Product 4', 'price' => 1200],
            ['id' => 5, 'name' => 'Product 5', 'price' => 1800],
            ['id' => 6, 'name' => 'Product 6', 'price' => 2200],
            ['id' => 7, 'name' => 'Product 7', 'price' => 2500],
            ['id' => 8, 'name' => 'Product 8', 'price' => 2100],
            ['id' => 9, 'name' => 'Product 9', 'price' => 2300],
            ['id' => 10, 'name' => 'Product 10', 'price' => 2000],
            ['id' => 11, 'name' => 'Product 11', 'price' => 2100],
            ['id' => 12, 'name' => 'Product 12', 'price' => 2600],
        ];

        return view('products.index', compact('products'));
    }
}

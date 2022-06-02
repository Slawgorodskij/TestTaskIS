<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($productId)
    {
        $product = Product::find($productId);
        $collection = $product->collection;

        return view('product', [
            'collection' => $collection,
            'product' => $product,
        ]);
    }
}

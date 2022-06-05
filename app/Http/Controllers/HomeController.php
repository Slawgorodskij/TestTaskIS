<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $collectionArray = [];
        $collections = Collection::all();

        foreach ($collections as $collection) {
            $multipleElements = [];
            $multipleElements[] = $collection['name'];
            foreach ($collection->product as $product) {
                $multipleElements[] = $product;
            }
            foreach ($multipleElements as $element) {
                $collectionArray[] = $element;
            }
            if (count($collectionArray) % 3 === 2) {
                $collectionArray[] = '';
            }
        };
        return view('home', [
            'collections' => $collectionArray
        ]);
    }
}

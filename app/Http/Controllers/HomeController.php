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
            $collectionItem['name'] = $collection['name'];
            $collectionItem['products'] = $collection->product;
            $collectionArray[] = $collectionItem;
        };

        return view('home', [
            'collections' => $collectionArray
        ]);
    }
}

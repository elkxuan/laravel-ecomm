<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getCollection($category)
    {
        $products = Product::where('category', $category)->get();
        return view('collection', ['category' => $category, 'products' => $products]);
    }

}

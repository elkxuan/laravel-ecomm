<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $limited_editions = Product::where('limited_edition', 1)->get();
        return view('home', ['products'=> $products, 'limited_editions'=> $limited_editions]);
    }

    public function getFeaturedProducts()
    {
        $products = Product::where('best_seller', 1)->get();
        return view('featured-products', ['products'=> $products]);
    }

    public function getCollection($category)
    {
        $products = Product::where('category', $category)->get();
        return view('collection', ['category' => $category, 'products' => $products]);
    }

}

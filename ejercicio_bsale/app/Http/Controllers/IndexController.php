<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $product = product::get();
        $category = category::get();

        return view('welcome')->with(['product' => $product, 'category' => $category]);
    }
}

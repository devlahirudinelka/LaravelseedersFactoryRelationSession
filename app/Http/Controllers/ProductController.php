<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
   public function showProduct(){
        $http_response_header['products'] = Product::all();
        return view('welcome')->with($http_response_header);
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Services\Service;
use App\Product;

class CartController extends Controller
{
    public function add(Request $request) 
    {	//add to session
    	//\Session::put('cart','Hello');
    	//return $request->all();
    	$product = Product::find($request->product_id);
    	$cart = new CartService();
    	$cart->add($product, $request->qty);
    	return view('shop._cart');
    }
}

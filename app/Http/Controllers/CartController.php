<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Product;

class CartController extends Controller
{
    public function add(Request $request) 
    {	
    	$product = Product::find($request->product_id);
    	//add to session
    	//\Session::put('cart','Hello');
    	//return $request->all();
    
    	$cart = new CartService();
    	$cart->add($product, $request->qty);
    	return view('shop._cart');
    }
}

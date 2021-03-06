<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(0);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.cart');
    }
	
	
	public function checkOut(){
		return view('cart.checkOut');
	}
	
	public function thankYou(){
		return view('cart.thankYou');
	}
	
}

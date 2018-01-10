<?php

namespace App\Http\Controllers;
use App\Member;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	 
	 protected $redirectTo = '/dashboard';
	 
    public function __construct()
    {
        $this->middleware(0);
    }
	
	/* validator */
	
	public function validator(array $data){
		return Validator::make($data, [
			'name' => 'required|string|max:255',
			'email' => 'required|string|max:255',
			'password' => 'required|string|min:6|confirmed'
		]);
	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
	
	public function register(array $data){
        return Member::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
	}
}

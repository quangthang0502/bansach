<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;

class AdminController extends Controller
{

//    public function __construct() {
//	    $this->middleware('guest:admin')->except('logout');
//    }

	public function dashboard(){
		return view('admin.home');
	}
	public function getLogin(){
		return view('admin.login');
	}

}

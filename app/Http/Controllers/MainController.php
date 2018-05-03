<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function home(){
		$categories = Category::all()->toArray();
		return view('home')->with(compact('categories'));
	}
}

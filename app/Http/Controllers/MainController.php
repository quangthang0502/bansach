<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
	public function __construct() {
		$categories = Category::all()->toArray();
		View::share(['categories' => $categories]);
	}

	public function home(){
		$category = Category::find(2);
		$listBooks = $category->getListBooks();
		return view('home')->with(compact('category','listBooks'));
	}

	public function getBook($id) {
		$book = Book::find($id);
		return view('detail')->with(compact('book'));
	}

	public function getListBooksByCategory($id){
		$category = Category::find($id);
		$listBooks = $category->getListBooks();
		return view('listBooksByCategory')->with(compact('category','listBooks'));
	}
}

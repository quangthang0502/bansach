<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller {
	public function __construct() {
		$categories = Category::all()->toArray();
		View::share( [ 'categories' => $categories ] );
	}

	public function home() {
		$category  = Category::find( 2 );
		$listBooks = $category->getListBooks();

		return view( 'home' )->with( compact( 'category', 'listBooks' ) );
	}

	public function getBook( $id ) {
		$book = Book::find( $id );

		return view( 'detail' )->with( compact( 'book' ) );
	}

	public function getListBooksByCategory( $id ) {
		$category  = Category::find( $id );
		$listBooks = $category->getListBooks();

		return view( 'listBooksByCategory' )->with( compact( 'category', 'listBooks' ) );
	}

	public function recommender( Request $request ) {
		$result    = $request->all();
		$result1   = $result['bookId'];
		$i         = 0;
		$listBooks = [
			Book::find( $result1[0] ),
			Book::find( $result1[1] ),
			Book::find( $result1[2] ),
			Book::find( $result1[3] ),
			Book::find( $result1[4] ),
		];

		return view( 'goiY' )->with( compact( 'listBooks' ) );
	}

	public function recommenderA( Request $request ) {
		$result    = $request->all();
		$result1   = $result['bookId'];
		$i         = 0;
		$listBooks = [
			Book::find( $result1[0] ),
			Book::find( $result1[1] ),
			Book::find( $result1[2] ),
			Book::find( $result1[3] ),
			Book::find( $result1[4] ),
		];

		return view( 'goiY2' )->with( compact( 'listBooks' ) );
	}

	public function getLogin() {
		return view( 'auth/login' );
	}

	public function getSignUp() {
		return view( 'auth/signup' );
	}

	public function infomation( $name ) {
		$user          = User::where( [ 'email' => $name ] )->first();
		$listBooksRate = $user->getUserRate();

		return view( 'userpage' )->with( compact( 'listBooksRate', 'user' ) );
	}
}

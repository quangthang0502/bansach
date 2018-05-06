<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'guest' )->except( 'logout' );
	}

	public function postLogin( UserRequest $request ) {
		$email    = $request->input( 'email' );
		$password = $request->input( 'password' );

		$user = User::where( [
			'email' => $email
		] )->first();
		if ( $user && Hash::check( $password, $user->password ) ) {
			Auth::login( $user, true );
			$request->session()->put( 'userData', $user );

			return redirect()->intended( '/' );
		} else {
			$errors = new MessageBag( [ 'loginError' => 'Tài khoản hoặc mật khẩu không đúng' ] );

			return redirect()->back()->withInput()->withErrors( $errors );
		}
	}

	public function signUp( RegisterRequest $request ) {
		$input = $request->only( [ 'email', 'password', 'name' ] );
		$user  = User::where( [
			'email' => $input['email']
		] )->first();
		if ( ! $user ) {
			User::create( [
				'email'    => $input['email'],
				'name'     => $input['name'],
				'password' => bcrypt( $input['password'] )
			] );

			return redirect( '/dang-nhap' );
		} else {
			$errors = new MessageBag( [ 'signUpError' => 'Tài khoản đã tồn tại' ] );

			return redirect()->back()->withInput()->withErrors( $errors );
		}
	}

	public function logout( Request $request ) {
		Auth::logout();
		$request->session()->forget( 'userData' );

		return redirect()->back();
	}
}

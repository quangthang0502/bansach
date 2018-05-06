<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'email',
		'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	public function getUserRate() {
		$listUserRate = UserRating::where( 'user_id', $this->id )->get();
		$result = [];
		foreach ($listUserRate as $a){
			array_push($result,Book::find($a->book_id));
		}
		return $result;
	}
}

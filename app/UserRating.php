<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRating extends Model
{
    //
	protected $fillable = [
		'user_id',
		'book_id',
		'rate'
	];
}

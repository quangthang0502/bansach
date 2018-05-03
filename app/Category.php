<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	protected $table = 'categories';

	protected $fillable = ['id', 'name'];

	function getListBooks(){
		return Book::where('category',$this->name)->get();
	}
}

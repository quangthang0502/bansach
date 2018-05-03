<?php
/**
 * Created by PhpStorm.
 * User: NguyenSy
 * Date: 5/3/2018
 * Time: 4:52 PM
 */

function t_str($value, $function)
{
	return \Illuminate\Support\Str::$function($value);
}
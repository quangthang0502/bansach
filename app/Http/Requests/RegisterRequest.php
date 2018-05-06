<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
	    return [
		    'email' => 'required|min:5|max:20',
		    'password' => 'required|min:6|max:225',
			'name' => 'required|max:225',
		    'password_confirmation' => 'required|same:password'
	    ];
    }
    public function messages() {
	    return [
		    'email.required'=> 'Tài khoản không hợp lệ',
		    'email.max'=> 'Địa chỉ Email không hợp lệ hoặc đã tồn tại',
		    'password.required' => 'Mật khẩu ít nhất 6 ký tự',
		    'password.min' => 'Mật khẩu ít nhất 6 ký tự',
		    'name.required' => 'Tên không hợp lệ',
		    'name.max' => 'Tên không hợp lệ',
		    'name.min' => 'Tên không hợp lệ',
		    'password_confirmation.required' => 'Mật khẩu không trùng lặp'
	    ];
    }
}

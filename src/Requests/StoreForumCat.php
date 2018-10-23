<?php

namespace XRA\Forum\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreForumCat extends FormRequest{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize(){
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules(){
		return [
			//
		];
	}
}
/*

switch($this->method())
    {
        case 'GET':
        case 'DELETE':
        {
            return [];
        }
        case 'POST':
        {
            return [
                'user.name.first' => 'required',
                'user.name.last'  => 'required',
                'user.email'      => 'required|email|unique:users,email',
                'user.password'   => 'required|confirmed',
            ];
        }
        case 'PUT':
        case 'PATCH':
        {
            return [
                'user.name.first' => 'required',
                'user.name.last'  => 'required',
                'user.email'      => 'required|email|unique:users,email,'.$user->id,
                'user.password'   => 'required|confirmed',
            ];
        }
        default:break;
    }

    */
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoCreateRequest extends FormRequest
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
				'name' => ['sometimes','required', "regex:^[a-zA-Z]{2,50}$^"],
				'email' =>['sometimes','required','email'],
				'password' =>['sometimes','required',"regex:^[0-9]{5,10}$^"],
				'confirm_password' =>['sometimes','required',"regex:^[0-9]{5,10}$^"],
				'phone_number' =>['sometimes','required',],//"regex:^[2-9]\d{2}-\d{3}-\d{4}$^"
				'vo_description' =>['sometimes','required',''],
				'required_skills' =>['sometimes','required',''],
				'work_location' =>['sometimes','required',''],
				'work_hours' =>['sometimes','required',''],
				'time_period' =>['',''],
				'stipend' =>['','']
        ];
    }
}

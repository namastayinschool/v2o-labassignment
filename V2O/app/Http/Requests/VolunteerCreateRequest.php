<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerCreateRequest extends FormRequest
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
        return ['firstName' => ['required',"regex:^[a-zA-Z]{2,50}$^"],
				'lastName' => ['required',"regex:^[a-zA-Z]{2,50}$^"],
				'homeAddress' => ['required'],
				'cellNumber' => ['required',], //create regular expression to accept numbers only and a dash
				'homeNumber' => ['required'], //create regular expresssion to accept numbers only and a dash
				'idNumber' => ['required'], //create regular expression to accept 6 numbers a dash and then 4 more numbers
				'examNumber' => ['required'], //cant accept more than 2 letters
				'emailAddress' => ['required','email'],
				'password' => ['required'],
				'interest1' => ['required','different:interest2','different:interest3','different:interest4','different:interest5'],
				'interest2' => ['required','different:interest3','different:interest4','different:interest5'],
				'interest3' => ['required','different:interest4','different:interest5'],
				'interest4' => ['required','different:interest5'],
				'interest5' => ['required']
            //
        ];
    }
}
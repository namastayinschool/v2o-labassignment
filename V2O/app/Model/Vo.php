<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vo extends Model
{
	
	
    //The attributes that are mass assignable
	protected $fillable = [
							'name','email',
							'password','confirm_password',
							'phone_number','vo_description',
							'required_skills','work_location',
							'work_hours','time_period','stipend'
						  ];
}
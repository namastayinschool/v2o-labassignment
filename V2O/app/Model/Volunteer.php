<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //
	protected $fillable = ['firstName', 'lastName', 'homeAddress', 'cellNumber', 'homeNumber', 'idNumber', 'examNumber', 'emailAddress', 'password', 'interest1',
	'interest2', 'interest3', 'interest4', 'interest5'];
}
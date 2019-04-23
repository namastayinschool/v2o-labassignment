<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    //
    protected $fillable = [ 'firstName',
                            'lastName',
                            'email',
                            'interest'
                          ];
}

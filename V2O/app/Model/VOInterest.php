<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VOInterest extends Model
{
    //
    protected $table = 'vointerests';
    public function user ()
    {
        return $this->belongsTo('App\Model\User');
    }

}
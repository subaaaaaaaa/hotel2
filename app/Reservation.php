<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'check-in_date'=>'required',
        'check-out_date'=>'required',
        'number_of_adults' => 'integer|min:1|max:3',
        'number_of_children' => 'integer|min:0|max:3',
    );
}

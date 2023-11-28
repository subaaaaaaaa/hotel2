<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['name','address','tel'];

    public static $rules = array(
        'name' => 'required',
        'address' => 'required',
        'tel' => 'required'
    );
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'checkIn_date'=>'required',
        'checkOut_date'=>'required',
        'number_of_adults' => 'integer|min:1|max:3',
        'number_of_children' => 'integer|min:0|max:3',
    );

    protected $primaryKey = 'reservation_id';

    public function guest()
    {
        return $this->belongsTo('App\Guest','guest_id','id');
    }
}

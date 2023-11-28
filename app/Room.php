<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function room_type()
    {
        return $this->belongsTo('App\Room_type','room_type_id','room_type_id');
    }

    public function getData()
    {
        return $this->room_type->room_type_id;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function room()
    {
        return $this->belongsTo('App\Room_type');
    }

    public function getData()
    {
        return $this->room_type->room_type_id;
    }
}

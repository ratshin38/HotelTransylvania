<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'totalPrice','beginDate'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}

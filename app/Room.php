<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','price','description', 'avatar', 'doorNumber','size'
    ];
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
}

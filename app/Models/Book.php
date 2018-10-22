<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bookings';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'booking_id';

    /**
     * @var array
     */

    protected $fillable = ['booking_id', 'hotel_idFk', 'user_idFk', 'booking_status', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

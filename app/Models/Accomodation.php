<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'accomodation';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['city_id', 'name', 'full_address', 'banner_img', 'location_latitude', 'location_longtitude', 'content', 'practical_id', 'review', 'status', 'room_nb', 'category', 'insider_rate', 'max_capacity'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

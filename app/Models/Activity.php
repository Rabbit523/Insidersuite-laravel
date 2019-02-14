<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'activity';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['city_id', 'name', 'address', 'activity_hours', 'category', 'language', 'location_longitude', 'location_latitude', 'content', 'practical_id', 'review', 'status', 'insider_rate'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

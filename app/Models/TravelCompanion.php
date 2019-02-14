<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelCompanion extends Model
{
          /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'travel_companion';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['user_id', 'title', 'surname', 'firstname', 'day', 'month', 'year'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

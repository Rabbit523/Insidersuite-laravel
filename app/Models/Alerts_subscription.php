<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alerts_subscription extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'alerts_subscription';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['user_id', 'destination', 'destination_date', 'frequancy'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

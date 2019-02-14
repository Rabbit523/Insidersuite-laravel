<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar_Accommodation extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'calendar_accomodation';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['accomodation_id', 'check_in_date', 'check_out_date', 'price_a_discount', 'price_b_discount', 'discount', 'nb_available'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

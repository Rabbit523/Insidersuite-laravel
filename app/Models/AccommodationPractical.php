<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccommodationPractical extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'practical_info_accomodation';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['offer_id', 'accom_id', 'check_in', 'check_out', 'breakfast', 'jacuzzi_access', 'gym_access', 'note', 'breakfast_t', 'jacuzzi_t', 'gym_t'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

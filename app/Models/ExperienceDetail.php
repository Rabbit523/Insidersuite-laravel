<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceDetail extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'experience_detail';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['experience_id', 'type', 'type_id', 'check_in', 'check_out', 'd_a_price', 'd_b_price', 'discount'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

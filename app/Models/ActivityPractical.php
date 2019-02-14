<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityPractical extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'practical_info_activity';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['offer_id', 'act_id', 'start_time', 'group_size', 'total_hours', 'parking', 'address', 'bring', 'provided'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career_detail extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'career_detail';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['id', 'department_id', 'position_name', 'office', 'content', 'banner_img'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

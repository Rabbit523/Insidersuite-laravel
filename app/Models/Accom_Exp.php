<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accom_Exp extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'accom_exp';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['accom_id', 'title', 'path'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

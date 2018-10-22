<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletters extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'newsletters';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['author', 'status', 'content'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

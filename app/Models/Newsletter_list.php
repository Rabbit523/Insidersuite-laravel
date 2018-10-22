<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter_list extends Model
{
          /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'newsletters_list';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['email'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

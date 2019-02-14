<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpDetailImage extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exp_link_imgs';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['exp_id', 'path', 'category'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

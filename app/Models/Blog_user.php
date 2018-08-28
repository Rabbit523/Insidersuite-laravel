<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog_user extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'blog_user';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['blog_id', 'user_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

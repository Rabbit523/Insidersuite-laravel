<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter_image extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'newsletter_images';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * @var array
     */

    protected $fillable = ['newsletter_id', 'path'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

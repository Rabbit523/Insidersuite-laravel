<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_message extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'contact_message';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['email', 'name', '_status', 'content', 'attached_file', 'subject'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

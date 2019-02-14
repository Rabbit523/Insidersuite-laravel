<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'title', 'first_name', 'last_name', 'day', 'month', 'year', 'nationality', 'address', 'postcode', 'city', 'country', 'phone_number', 'mobile_number', 'email', 'password', 'indicated_country', 'host_checked', 'host_description', 'hospital_description'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\UserRoles', 'user_role_idFk', 'role_id');
    }

    public function change_login_status($id)
    {
        $status = User::findOrFail($id);
        $status->first_login_status = 1;
        $status->save();
    }
}

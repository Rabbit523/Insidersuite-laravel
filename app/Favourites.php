<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourites extends Model
{
    protected $primaryKey = 'favourite_id';
    protected $table = 'favourites';

   	public function hotel()
   	{
   		return $this->belongsTo('App\Hotels','hotel_idFk','hotel_id');
   	}
}

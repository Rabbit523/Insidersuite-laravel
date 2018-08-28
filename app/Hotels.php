<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Favourites;
class Hotels extends Model
{
   	protected $table = 'hotels';
   	protected $primaryKey = 'hotel_id';

   	public function check_favourite($id)
   	{
   		$check = Favourites::where('hotel_idFk',$id)->exists();
   		return $check;
   	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favourites;
use Auth;

class FavouritesController extends Controller
{
    public function list_favourites()
    {
    	$favourites = Favourites::where('user_idFk',Auth::User()->user_id)->where('favorite_status',1)->get();
    	return view('favourites',compact('favourites'));
    }

    public function add_favourite($id)
    {
        $favourite = Favourites::where('hotel_idFk',$id)->first();
        // dd($favourite);
    	if (count($favourite) > 0) {
            $favourite->favorite_status = '1';
            $favourite->save();
        }else{
            $favourite = new Favourites();
            $favourite->user_idFk   = Auth::User()->user_id;
            $favourite->hotel_idFk  = $id;
            $favourite->save();
        }
    }

    public function remove_favourite($id)
    {
    	$favourite = Favourites::where('hotel_idFk',$id)->first();
        // dd($favourite);
    	$favourite->favorite_status = '0';
    	$favourite->save();
    }
}

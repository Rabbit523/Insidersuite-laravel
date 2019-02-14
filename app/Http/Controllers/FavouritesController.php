<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favourite;
use App\Models\Offer;
use App\Models\Experience;
use App\Models\ExperienceDetail;
use Auth;

class FavouritesController extends Controller
{
    public function list_favourites()
    {
        $favourites = Favourite::where('user_id', Auth::User()->user_id)->get();
        $count = Favourite::where('user_id', Auth::User()->user_id)->count();
        $experiences = [];
        $details = [];
        $experienceDetails = ExperienceDetail::get();;
        foreach ($favourites as $element) {
            if ($element->user_id == Auth::User()->user_id) {
                $exp = Experience::where('id', $element->exp_id)->first();              
                array_push($experiences,$exp);
            }
        }
        foreach ($experiences as $element) {
            $val = [
                "exp_id" => $element->id,
                "accommodation" => ExperienceDetail::where('experience_id', $element->id)->where('type', 'accommodation')->count(),
                "activity" => ExperienceDetail::where('experience_id', $element->id)->where('type', 'activity')->count(),
            ];
            array_push($details, $val);
        }
        $offers = Offer::get();
    	return view('favourites',compact('favourites', 'experiences', 'offers', 'details', 'count'));
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

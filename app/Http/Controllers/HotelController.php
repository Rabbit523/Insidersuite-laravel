<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotels;

class HotelController extends Controller
{
    public function list_hotels()
    {
    	// dd();
    	$hotels = Hotels::all();
    	// dd($hotels);
    // 	return view('hotels.list_hotels',compact('hotels'));
        return view('mail_templates.review');
    }

    public function hotel_details($id)
    {
    	$hotel = Hotels::findOrFail($id);
    	// dd($hotel);
    	return view('hotels.details', compact('hotel'));
    }
}

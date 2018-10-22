<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
class ProfileController extends Controller
{
	public function update_profile(Request $request)
	{
		$user = User::findOrFail(Auth::User()->user_id);
		$user->title			= $request->title;
		$user->first_name		= $request->first_name;
		$user->last_name		= $request->last_name;
		$user->day				= $request->day;
		$user->month			= $request->month;
		$user->year				= $request->year;
		$user->nationality		= $request->nationality;
		$user->address 			= $request->address;
		$user->postcode			= $request->postcode;
		$user->city				= $request->city;
		$user->country			= $request->country;
		$user->phone_number		= $request->phone_number;
		$user->mobile_number	= $request->mobile_number;
		$user->save();
		return redirect('profile');
	}

	public function login_update(Request $request)
	{
		$user = User::findOrFail(Auth::User()->user_id);
		$user->email			= $request->email;
		$user->password			= Hash::make($request->password);
		$user->save();
		return redirect('profile');
	}

	public function upload_photo(Request $request) {
		if ($request->file('file')->isValid()){
			$url = url("/assets/uploads/profile_logo") ."/" . $request->file->store('', 'profile_logo');
			$arr = explode("/", $url);
			$path = "/".$arr[3]."/".$arr[4]."/".$arr[5]."/".$arr[6];
			$user = User::findOrFail(Auth::User()->user_id);
			$user->profile_img = $path;
			$user->save();
			return response()->json($path);
		} else {
				return ["error" => "No image attached"];
		}
	}
}

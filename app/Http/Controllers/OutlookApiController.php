<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;

class OutlookApiController extends Controller
{
    public function get_access_token(Request $request)
    {
    // 	dd($request);
        $access_token = Curl::to('https://login.microsoftonline.com/common/oauth2/v2.0/token')
        					->withData(array('client_id' => '3a8e082f-a84f-4caa-9efa-d2847fa25b4d','client_secret' => 'dmhvB391?=]ktkICVNVP09#','code' => $request->code, 'redirect_uri' => url('outlook/get_outlook_callback'), 'grant_type' => 'authorization_code'))
        					->asJsonResponse()
        					->post();
        dd($access_token);
        session(['outlookToken'=>$access_token]);
    }
    
    public function get_outlook_callback() {
         $contacts = Curl::to('https://graph.microsoft.com/v1.0/me/contacts')
        					->withHeader('Authorization: Bearer '.session('outlookToken'))
        					->asJsonResponse()
        					->get();
        // dd($contacts);
        $outlook_contacts = [];
		foreach ($contacts->value as $key => $value) {
			$outlook_contacts[$key]['email'] = $value->emailAddresses[0]->address;
			$outlook_contacts[$key]['name'] = $value->displayName;
		}
		// dd($outlook_contacts);
        return view('footer.sponsor',compact('outlook_contacts'));
    }
}

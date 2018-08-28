<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;

class OutlookApiController extends Controller
{
    public function get_access_token(Request $request)
    {
    	// dd($request);
        $access_token = Curl::to('https://login.microsoftonline.com/common/oauth2/v2.0/token')
        					->withData(array('client_id' => 'f82e66d4-3f5f-497a-9b95-0fbc281739ed','client_secret' => 'buuN9-%*cvhkRQUXZQ1820(','code' => $request->code, 'redirect_uri' => url('outlook/get_access_token'), 'grant_type' => 'authorization_code'))
        					->asJsonResponse()
        					->post();
        session(['outlookToken'=>$access_token->access_token]);
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
        return view('sponsor',compact('outlook_contacts'));
    }

}

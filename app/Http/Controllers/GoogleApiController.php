<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_PeopleService;
use Curl;
class GoogleApiController extends Controller
{
    function get_friend_list()
	{
		// $client = new Google_Client();
		// $client->setAuthConfig('client_secret_160411329069-h8mkqhj634t2k9mcmcopnak2hehi0ggt.apps.googleusercontent.com.json');
		// $client->addScope('Profile');
		// $client->setRedirectUri(url('google'));
		// if (isset($_GET['code'])) {
		//     $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
		// }
		$client = new Google_Client();
		// dd(session());

		// OAuth 2.0 settings
		//
		// Go to the Google API Console, open your application's
		// credentials page, and copy the client ID, client secret,
		// redirect URI, and API key. Then paste them into the
		// following code.
		$client->setClientId('160411329069-h8mkqhj634t2k9mcmcopnak2hehi0ggt.apps.googleusercontent.com');
		$client->setClientSecret('liebpGJdg2VDCU-Pkv9GJqAb');
		// $client->setRedirectUri('YOUR_REDIRECT_URL');

		// $client->setAuthConfig('client_secret_160411329069-h8mkqhj634t2k9mcmcopnak2hehi0ggt.apps.googleusercontent.com.json');
		$client->setRedirectUri(url('google'));
		// $client->addScope('email');
		$client->addScope('https://www.googleapis.com/auth/contacts.readonly');
		// dd(session('access_token'));	
		// $client
		// session()->forget('access_token');
		if (isset($_GET['oauth'])) {
		  // Start auth flow by redirecting to Google's auth server
			// dd(session());
			$auth_url = $client->createAuthUrl();
			$client->setApprovalPrompt ("auto");
			// dd($auth_url);=
			return redirect(filter_var($auth_url, FILTER_SANITIZE_URL));
		} else if (isset($_GET['code'])) {
		  // Receive auth code from Google, exchange it for an access token, and
		  // redirect to your base URL
			// dd(session('access_token'));
			$client->authenticate($_GET['code']);

			session(['access_token' => $client->getAccessToken()]);
			// session('access_token',$client->getAccessToken());
			$redirect_uri = url('google');
			// dd(session('access_token'));
			return redirect(filter_var($redirect_uri, FILTER_SANITIZE_URL));
		} else if (session('access_token')) {
			// dd(session('access_token'));
		  // You have an access token; use it to call the People API
			$client->setAccessToken(session('access_token'));

			$people_service = new Google_Service_PeopleService($client);
			$connections = $people_service->people_connections->listPeopleConnections('people/me', array('personFields' => 'names,emailAddresses','pageSize' => '1000'));
			$response = Curl::to('https://www.google.com/m8/feeds/contacts/default/full?max-results=1000&alt=json')
						->withHeader('Authorization: Bearer '.session('access_token')['access_token'])
						// ->withData(array('personFields'=>'names,emailAddresses','pageSize'=>1000))
						->asJsonResponse()
						->get();
			// dd($response->feed->entry);
			$google_contacts = [];
			$count = 0;
			foreach ($response->feed->entry as $key => $value) {
				$email = 'gd$email';
				$name = '$t';
				if (isset($value->$email)) {
					$google_contacts[$count]['email'] = $value->$email[0]->address;
					$google_contacts[$count]['name'] = $value->title->$name;
					$count++;
				}
			}
			sort($google_contacts);
			// dd($google_contacts);
			session()->forget('access_token');
			return view('offers',compact('google_contacts'));


		  // TODO: Use service object to request People data
		} else {
			session()->forget('access_token');
			$redirect_uri = url('google?oauth');
			return redirect(filter_var($redirect_uri, FILTER_SANITIZE_URL));
		}
		// $http = $client->authorize();
		// $response = Curl::to('https://www.googleapis.com/plus/v1/people/me')
		// 				->asJson()
		// 				->post();

		// dd($connections);
	}
	function sponsor_get_friend_list()
	{
		// $client = new Google_Client();
		// $client->setAuthConfig('client_secret_160411329069-h8mkqhj634t2k9mcmcopnak2hehi0ggt.apps.googleusercontent.com.json');
		// $client->addScope('Profile');
		// $client->setRedirectUri(url('google'));
		// if (isset($_GET['code'])) {
		//     $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
		// }
		$client = new Google_Client();
		// dd(session());

		// OAuth 2.0 settings
		//
		// Go to the Google API Console, open your application's
		// credentials page, and copy the client ID, client secret,
		// redirect URI, and API key. Then paste them into the
		// following code.
		$client->setClientId('160411329069-h8mkqhj634t2k9mcmcopnak2hehi0ggt.apps.googleusercontent.com');
		$client->setClientSecret('liebpGJdg2VDCU-Pkv9GJqAb');
		// $client->setRedirectUri('YOUR_REDIRECT_URL');

		// $client->setAuthConfig('client_secret_160411329069-h8mkqhj634t2k9mcmcopnak2hehi0ggt.apps.googleusercontent.com.json');
		$client->setRedirectUri(url('sponsor/google'));
		// $client->addScope('email');
		$client->addScope('https://www.googleapis.com/auth/contacts.readonly');
		// dd(session('access_token'));	
		// $client
		// session()->forget('access_token');
		if (isset($_GET['oauth'])) {
		  // Start auth flow by redirecting to Google's auth server
			// dd(session());
			$auth_url = $client->createAuthUrl();
			$client->setApprovalPrompt ("auto");
			// dd($auth_url);=
			return redirect(filter_var($auth_url, FILTER_SANITIZE_URL));
		} else if (isset($_GET['code'])) {
		  // Receive auth code from Google, exchange it for an access token, and
		  // redirect to your base URL
			// dd(session('access_token'));
			$client->authenticate($_GET['code']);

			session(['access_token' => $client->getAccessToken()]);
			// session('access_token',$client->getAccessToken());
			$redirect_uri = url('sponsor/google');
			// dd(session('access_token'));
			return redirect(filter_var($redirect_uri, FILTER_SANITIZE_URL));
		} else if (session('access_token')) {
			// dd(session('access_token'));
		  // You have an access token; use it to call the People API
			$client->setAccessToken(session('access_token'));

			$people_service = new Google_Service_PeopleService($client);
			$connections = $people_service->people_connections->listPeopleConnections('people/me', array('personFields' => 'names,emailAddresses','pageSize' => '1000'));
			$response = Curl::to('https://www.google.com/m8/feeds/contacts/default/full?max-results=1000&alt=json')
						->withHeader('Authorization: Bearer '.session('access_token')['access_token'])
						// ->withData(array('personFields'=>'names,emailAddresses','pageSize'=>1000))
						->asJsonResponse()
						->get();
			// dd($response->feed->entry);
			$google_contacts = [];
			$count = 0;
			foreach ($response->feed->entry as $key => $value) {
				$email = 'gd$email';
				$name = '$t';
				if (isset($value->$email)) {
					$google_contacts[$count]['email'] = $value->$email[0]->address;
					$google_contacts[$count]['name'] = $value->title->$name;
					$count++;
				}
			}
			sort($google_contacts);
			// dd($google_contacts);
			session()->forget('access_token');
			return view('sponsor',compact('google_contacts'));


		  // TODO: Use service object to request People data
		} else {
			session()->forget('access_token');
			$redirect_uri = url('sponsor/google?oauth');
			return redirect(filter_var($redirect_uri, FILTER_SANITIZE_URL));
		}
		// $http = $client->authorize();
		// $response = Curl::to('https://www.googleapis.com/plus/v1/people/me')
		// 				->asJson()
		// 				->post();

		// dd($connections);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YahooOAuthApplication;
class YahooApiController extends Controller
{
    public function yahoo()
    {
    	
		$CONSUMER_KEY      = 'dj0yJmk9ejEzaTg2M0QyV2NFJmQ9WVdrOVJFbE9RVFk1Tkc4bWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD03OA--';
		$CONSUMER_SECRET   = '76d91789bc74c32f22bcf50f01e0e8258fd28942';
		$APPLICATION_ID    = 'DINA694o';
		$CALLBACK_URL      = url('yahoo');

		$oauthapp      = new YahooOAuthApplication($CONSUMER_KEY, $CONSUMER_SECRET, $APPLICATION_ID, $CALLBACK_URL);

		# Fetch request token
		$request_token = $oauthapp->getRequestToken($CALLBACK_URL);

		# Redirect user to authorization url
		$redirect_url  = $oauthapp->getAuthorizationUrl($request_token);

		# Exchange request token for authorized access token
		$access_token  = $oauthapp->getAccessToken($request_token, $_REQUEST['oauth_verifier']);

		# update access token
		$oauthapp->token = $access_token;

		# fetch user profile
		$profile = $oauthapp->getProfile();

		dd($profile);
    }
}

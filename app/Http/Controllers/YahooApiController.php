<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once __DIR__.'/Hybridauth/Hybridauth.php';
use Hybridauth\Hybridauth;

class YahooApiController extends Controller
{
    public function yahoo()
    {
        $config = array(
            "callback" => "https://www.insidersuite.com/yahoo",
            "providers" => array(
              "Yahoo" => array(
                "enabled" => true,
                "keys"    => array("id" => "dj0yJmk9ZHg5RFpZNGIxWVBZJnM9Y29uc3VtZXJzZWNyZXQmc3Y9MCZ4PWRm", "secret" => "12d2b5b33f70ac36f20be34581ecff1e9bcd2941"),
                "scope"   => ['sdct-r', 'fspt-r', 'mail-r', 'sdps-r'], // optional
              ),
            ),
            'debug_mode' => true,
            // For some reason Hybrid_Auth doesn't create file in a specified folder, be sure that it exists
            'debug_file' => __DIR__ . "data/log/hybridAuth.log"
        );
        
        $hybridauth = new Hybridauth( $config );
        dd($hybridauth);
        $adapter = $hybridauth->authenticate( "Yahoo" );
        
        $user_profile = $adapter->getUserProfile();
        dd($user_profile);
    }
}

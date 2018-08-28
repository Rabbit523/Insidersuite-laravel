<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function alert_page()
    {
    	return view('alerts');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    function dashboardfun(){
        return view('backend.dashboard');
    }
}

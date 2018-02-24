<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class TopController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function index(Request $request) {
        if ( (new Agent())->isMobile() ) {
            return view('mobile.top.index');
        } else {
            return view('pc.top.index');
        }
    }    
}

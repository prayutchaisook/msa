<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('clients');
    }

    public function showMain(Request $request)
    {
        //print_r($request->session()->get('jwt_token'));
         return view('layouts.top-nav.app');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function __construct()
    {
         $this->middleware('admin');
    }

    public function showPortal()
    {
        return view('layouts.fixed.app');
    }
    public function showProfile()
    {
        return view('admin.profile');
    }
}

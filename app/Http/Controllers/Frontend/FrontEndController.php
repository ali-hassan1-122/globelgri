<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\GeneralSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserBlock');
    }
    public function index()
    {

        $agents = User::all();
        return view('frontend.home', compact('agents'));
    }
}

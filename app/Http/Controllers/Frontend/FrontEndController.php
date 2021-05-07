<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserBlock');
    }
    public function index()
    {
        return view('frontend.home');
    }
}

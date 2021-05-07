<?php

namespace App\Http\Controllers\Frontend;

use App\GeneralSetting;
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
        $phone = '';
        $email = '';
        $address = '';
        $description = '';
        $logo = '';
        $setting = GeneralSetting::get();
        foreach ($setting as $row) {
            $phone = $row->phone;
            $email = $row->email;
            $address = $row->address;
            $description = $row->description;
            $logo = $row->logo;
        }
        return view('frontend.home')->with(['phone' => $phone, 'email' => $email, 'address' => $address, 'description' => $description, 'logo' => $logo]);
    }
}

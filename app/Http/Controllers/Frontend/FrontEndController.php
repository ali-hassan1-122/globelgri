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
        $phone = '';
        $email = '';
        $address = '';
        $description = '';
        $logo = '';
        $image = '';
        $agent_name = '';
        $role = '';
        $agents = User::all();
        $setting = GeneralSetting::get();
        foreach ($setting as $row) {
            $phone = $row->phone;
            $email = $row->email;
            $address = $row->address;
            $description = $row->description;
            $logo = $row->logo;
        }
        return view('frontend.home', compact('agents'))->with([
            'phone' => $phone,
            'email' => $email,
            'address' => $address,
            'description' => $description,
            'logo' => $logo,


        ]);
    }
}

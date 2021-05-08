<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('UserBlock');
    }

    public function dashboard()
    {

        return view('user.dashboard');
    }


    public function profile()
    {
        return view('user.profile');
    }


    public function profileupdate(Request $request)
    {
        if ($request->ajax()) {
            $this->validate($request, [
                'name' => 'required|min:3|max:50',
                'password' => 'required|confirmed|min:6',
            ]);
            $id = $request->id;
            $profile = User::find($id);
            $profile->password = Hash::make($request->password);
            $profile->name = $request->name;
            $profile->phone = $request->phone;
            $profile->about = $request->about;
            if ($request->hasfile('image')) {
                if (!empty($profile->image)) {
                    $image_path = $profile->image;
                    unlink($image_path);
                }
                $image = $request->file('image');
                $name = time() . 'profile' . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'profile_images/';
                $image->move($destinationPath, $name);
                $profile->image = 'profile_images/' . $name;
            }

            $profile->update();
            return response()->json([
                'success' => 'Profile Updated Successfully!',
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Hash;
use Auth;

class ProfileController extends Controller
{
    public function password()
    {
        return view('admin.changepassword');
    }

    public function changepassword(Request $request) {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }


    public function profile()
    {   
        $id = auth::user()->id;
        $record = user::find($id);
        return view('admin.profile',compact('record'));
    }

    public function updateprofile(Request $request, $id){
       
        //print_r($request->all());die();

        $profile = user::find($id);
        if($request->hasFile('logo'))
        {
            $filename = $request->file('logo')->getClientOriginalName();
            $path = $request->file('logo')->store('public/logo');
            $profile->logo = $path;
        }

        
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->facebook = $request->facebook;
        $profile->instagram = $request->instagram;
        $profile->about = $request->about;
        $profile->company = $request->company;
        $profile->country = $request->country;
        $profile->address = $request->address;
        $profile->twitter = $request->twitter;
        $profile->linkedin = $request->linkedin;
        $profile->save();
        return redirect()->route('profile')
                         ->with('success','Profile Update Successfully');
    }
}

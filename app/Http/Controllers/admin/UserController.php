<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function index(){
        $records =User::where('type','=','0')->get();
        return view('admin.user.index',compact('records'));
    }

    public function create(){
        return view('admin.user.add');
    }

    public function store(Request $request){
        
        $validate = $request->validate([
            'name' => 'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $user =new User();
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/user');
            $user->logo = $path;
        }

        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user')
                         ->with('success','User Inserted Successfully');
    }

    public function delete($id){
        $record = User::find($id);
        $record->delete();
        return redirect()->route('user')
                         ->with('success','User Deleted Successfully');
    }

    public function edit($id){
        $record = User::find($id);
        return view('admin.user.edit',compact('record'));
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required',
            'email'=>'required',
        ]);
        $user =user::find($id);
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/user');
            $user->image = $path;
        }

        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->route('user')
                         ->with('success','User Updated Successfully');
    }

    public function status($id, Request $request){
        $record = User::find($id);
        if($record->status == 0){
         $record->status = 1;
         $record->save();
        }
         else
         { $record->status = 0;
          $record->save();
         }
        return redirect()->route('user')
                        ->with('success','Status Updated Successfully');
    }
}
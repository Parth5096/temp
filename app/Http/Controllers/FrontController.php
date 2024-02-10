<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;

class FrontController extends Controller
{
   public function index(){

    return view('front.index');
   } 
   
   public function register(){
      return view('front.register'); 
   }


   public function postRegistration(Request $request)
    {  
        //print_r($request->all());die();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:8|max:12',
        ]);
           
        $user =new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        //$user->type = 0;
        $user->save();
         
        return redirect()->route('home')->withSuccess('Great! You have Successfully Registed');
    }

}

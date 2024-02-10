<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Multipleimages;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index(){
        $records = Contact::get();
        return view('admin.contact.index',compact('records'));
    }

    

    public function delete($id){
        $record = Contact::find($id);
        $record->delete();
        return redirect()->route('contact')
                         ->with('success','Contact Deleted Successfully');
    }

    public function status($id, Request $request){
        $record = Contact::find($id);
        if($record->status == 0){
         $record->status = 1;
         $record->save();
        }
         else
         { $record->status = 0;
          $record->save();
         }
        return redirect()->route('contact')
                        ->with('success','Status Updated Successfully');
    }
}

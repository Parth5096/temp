<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index(){

        $records =payment::get();
        return view('admin.payment.index',compact('records'));
    }

    public function delete($id){
        $record = payment::find($id);
        $record->delete();
        return redirect()->route('payment')
                         ->with('success','Payment Deleted Successfully');
    }

    public function edit($id){
        $record = category::find($id);
        return view('admin.category.edit',compact('record'));
    }

    public function update(Request $request, $id){

        $category =category::find($id);
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/category');
            $category->image = $path;
        }

        
        $category->name = $request->name;
        $category->description = $request->description;
        $category->meta_title = $request->meta_title;
        $category->meta_descrip = $request->meta_descrip;
        $category->meta_keywords = $request->meta_keywords;
        $category->save();
        return redirect()->route('category')
                         ->with('success','Category Updated Successfully');
    }

    public function status($id, Request $request){
        $record = payment::find($id);
        if($record->status == 0){
         $record->status = 1;
         $record->save();
        }
         else
         { $record->status = 0;
          $record->save();
         }
        return redirect()->route('payment')
                        ->with('success','Status Updated Successfully');
    }
}

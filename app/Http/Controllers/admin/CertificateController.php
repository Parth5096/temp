<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index(){

        $records =Certificate::get();
        return view('admin.certificate.index',compact('records'));
    }

    public function create(){
        return view('admin.certificate.add');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required',
        ]);

        $Certificate =new Certificate();
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/certificate');
            $Certificate->image = $path;
        }
        $Certificate->name = $request->name;
        $Certificate->save();
        return redirect()->route('certificate')
                         ->with('success','certificate Inserted Successfully');
    }

    public function delete($id){
        $record = Certificate::find($id);
        $record->delete();
        return redirect()->route('certificate')
                         ->with('success','certificate Deleted Successfully');
    }

    public function edit($id){
        $record = Certificate::find($id);
        return view('admin.certificate.edit',compact('record'));
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required',
        ]);
        
        $Certificate =Certificate::find($id);
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/certificate');
            $Certificate->image = $path;
        }
        $Certificate->name = $request->name;
        $Certificate->save();
        return redirect()->route('certificate')
                         ->with('success','Certificate Updated Successfully');
    }

    public function status($id, Request $request){
        $record = Certificate::find($id);
        if($record->status == 0){
         $record->status = 1;
         $record->save();
        }
         else
         { $record->status = 0;
          $record->save();
         }
        return redirect()->route('certificate')
                        ->with('success','Status Updated Successfully');
    }
}

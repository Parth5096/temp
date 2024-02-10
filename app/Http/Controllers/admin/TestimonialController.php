<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index(){

        $records =Testimonial::get();
        return view('admin.testimonial.index',compact('records'));
    }

    public function create(){
        return view('admin.testimonial.add');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required',
        ]);

        $Testimonial =new Testimonial();
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/testimonial');
            $Testimonial->image = $path;
        }
        $Testimonial->name = $request->name;
        $Testimonial->post = $request->post;
        $Testimonial->description = $request->description;
        $Testimonial->save();
        return redirect()->route('testimonial')
                         ->with('success','testimonial Inserted Successfully');
    }

    public function delete($id){
        $record = Testimonial::find($id);
        $record->delete();
        return redirect()->route('testimonial')
                         ->with('success','testimonial Deleted Successfully');
    }

    public function edit($id){
        $record = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('record'));
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required',
        ]);
        
        $Testimonial =Testimonial::find($id);
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/testimonial');
            $Testimonial->image = $path;
        }
        $Testimonial->name = $request->name;
        $Testimonial->post = $request->post;
        $Testimonial->description = $request->description;
        $Testimonial->save();
        return redirect()->route('testimonial')
                         ->with('success','Testimonial Updated Successfully');
    }

    public function status($id, Request $request){
        $record = Testimonial::find($id);
        if($record->status == 0){
         $record->status = 1;
         $record->save();
        }
         else
         { $record->status = 0;
          $record->save();
         }
        return redirect()->route('testimonial')
                        ->with('success','Status Updated Successfully');
    }
}

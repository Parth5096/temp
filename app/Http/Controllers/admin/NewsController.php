<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $records =News::get();
        return view('admin.news.index',compact('records'));
    }

    public function create(){
        return view('admin.news.add');
    }

    public function store(Request $request){
        $validatedata = $request->validate([
            'title' => 'required',
            'image'=>'required',

        ]);
        $product =new News();
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/product');
            $product->image = $path;
        }
        
        $product->title = $request->title;
        $product->save();
        return redirect()->route('news')
                         ->with('success','News Inserted Successfully');
    }

    public function delete($id){
        $record = News::find($id);
        $record->delete();
        return redirect()->route('news')
                         ->with('success','News Deleted Successfully');
    }

    public function edit($id){
        
        $record = News::Find($id);
        return view('admin.news.edit',compact('record'));
    }

    public function update(Request $request, $id){
        
        $validatedata = $request->validate([
            'title' => 'required',
            

        ]);

        $product =News::find($id);
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/product');
            $product->image = $path;
        }

        
        $product->title = $request->title;
        
        $product->save();
        return redirect()->route('news')
                         ->with('success','News Updated Successfully');
    }

    public function status($id, Request $request){
        $record = News::find($id);
        if($record->status == 0){
         $record->status = 1;
         $record->save();
        }
         else
         { $record->status = 0;
          $record->save();
         }
        return redirect()->route('news')
                        ->with('success','Status Updated Successfully');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Multipleimages;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $records = Category::get();
        return view('admin.category.index',compact('records'));
    }

    public function create(){
        return view('admin.category.add');
    }

    public function store(Request $request){
        //print_r($request->all());die();
        $validatedata = $request->validate([
            'name' => 'required',

        ]);
        $category =new Category();
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/category');
            $category->image = $path;
        }
       // print_r($request->all());die();
        $category->name = $request->name;
        $category->slug = str::slug($request->name);
        $category->save();
        return redirect()->route('category')
                         ->with('success','Created New Category Successfully');
    }

    public function delete($id){
        $record = Category::find($id);
        $record->delete();
        return redirect()->route('category')
                         ->with('success','Category Deleted Successfully');
    }

    public function edit($id){
        $record = category::Find($id);
        return view('admin.category.edit',compact('record'));
    }

    public function update(Request $request, $id){
        
        //print_r($request->all());die();
        $validatedata = $request->validate([
            'name' => 'required',
            

        ]);

        $category =Category::find($id);
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/category');
            $category->image = $path;
        }
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category')
                         ->with('success','Updated Successfully');
    }

    public function status($id, Request $request){
        $record = Category::find($id);
        if($record->status == 0){
         $record->status = 1;
         $record->save();
        }
         else
         { $record->status = 0;
          $record->save();
         }
        return redirect()->route('category')
                        ->with('success','Status Updated Successfully');
    }
}

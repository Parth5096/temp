<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Multipleimages;
use Illuminate\Support\Str;
use DB;

class ProductController extends Controller
{
    public function index(){
         //=Product::get();
         $records = DB::table('products')
                ->leftJoin('categories','products.category_id','=','categories.id')
                ->select('products.*','categories.name')
                ->get();
        return view('admin.product.index',compact('records'));
    }

    public function create(){
        $category = Category::get();
        return view('admin.product.add',compact('category'));
    }

    public function store(Request $request){
        
        $validatedata = $request->validate([
            'product_name' => 'required',
            'price'=>'required',
            'description'=>'required',
            'selling_price'=>'required',
            'image'=>'required',

        ]);
        //print_r($request->all());die();
        $product =new Product();
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/product');
            $product->image = $path;
        }
        
        $product->product_name = $request->product_name;
        $product->slug = str::slug($request->product_name);
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->selling_price = $request->selling_price;
        $product->qty = $request->qty;
        $product->save();

        if($product->save()){
            if($request->filenames)
            {
                foreach($request->file('filenames') as $file)
                    {
                        $name = $file->getClientOriginalName();
                        $path = $file->store('public/products');
                        
                        $productimage =new Multipleimages();
                        $productimage->product_id = $product->id;
                        $productimage->images = $path;
                        $productimage->save();

                          
                    }
            }
        }
        return redirect()->route('product')
                         ->with('success','Created New Product Successfully');
    }

    public function delete($id){
        $record = product::find($id);
        $record->delete();
        return redirect()->route('product')
                         ->with('success','product Deleted Successfully');
    }

    public function edit($id){
        
        $project = Multipleimages::where('product_id','=',$id)->get();

        $record = DB::table('products')
                ->leftJoin('categories','products.category_id','=','categories.id')
                ->select('products.*','categories.name')
                ->where('products.id',$id)
                ->first();
                //print_r($record);die();
        $category = Category::get();
        return view('admin.product.edit',compact('record','category','project'));
    }

    public function update(Request $request, $id){
        
        $validatedata = $request->validate([
            'product_name' => 'required',
            'price'=>'required',
            'selling_price'=>'required',
            

        ]);

        $product =product::find($id);
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/product');
            $product->image = $path;
        }
        
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->slug = str::slug($request->product_name);
        $product->description = $request->description;
        $product->price = $request->price;
        $product->selling_price = $request->selling_price;
        $product->qty = $request->qty;
        $product->save();
        if($product->save()){
            if($request->filenames)
            {
                foreach($request->file('filenames') as $file)
                    {
                        $name = $file->getClientOriginalName();
                        $path = $file->store('public/products');
                        
                        $productimage =new Multipleimages();
                        $productimage->product_id = $product->id;
                        $productimage->images = $path;
                        $productimage->save();

                          
                    }
            }
        }
        return redirect()->route('product')
                         ->with('success','product Inserted Successfully');
    }

    public function status($id, Request $request){
        $record = product::find($id);
        if($record->status == 0){
         $record->status = 1;
         $record->save();
        }
         else
         { $record->status = 0;
          $record->save();
         }
        return redirect()->route('product')
                        ->with('success','Status Updated Successfully');
    }
}

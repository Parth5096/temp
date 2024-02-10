<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{   
    public function index(){
        $records = Cart::leftjoin('products','products.id','=','carts.product_id')
        ->select('carts.price','carts.userid','carts.total_no_of_product','carts.id','products.product_name','products.image')
        ->get();
        return view('admin.cart.index',compact('records'));
    }

    public function status($id, Request $request){
        $record = cart::find($id);
        if($record->status == 0){
         $record->status = 1;
         $record->save();
        }
         else
         { $record->status = 0;
          $record->save();
         }
        return redirect()->route('cart')
                        ->with('success','Status Updated Successfully');
    }

    public function delete($id){
        $record = cart::find($id);
        $record->delete();
        return redirect()->route('cart')
                         ->with('success','Cart Deleted Successfully');
    }
    
}

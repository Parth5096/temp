<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index(){
        $records =coupon::get();
        return view('admin.coupon.index',compact('records'));
    }

    public function create(){
        return view('admin.coupon.add');
    }

    public function store(Request $request)
    {   
        $validatedata = $request->validate([
            'coupon' => 'required',
            'quantity'=>'required',
            'amount'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',

        ]);
        $coupon =new coupon();
        $coupon->coupon = $request->coupon;
        $coupon->discount = $request->discount;
        $coupon->quantity = $request->quantity;
        $coupon->amount = $request->amount;
        $coupon->value = $request->value;
        $coupon->start_date = $request->start_date;
        $coupon->end_date = $request->end_date;
        $coupon->save();
        return redirect()->route('coupon')
                         ->with('success','Coupon Inserted Successfully');
    }

    public function delete($id){
        $record = coupon::find($id);
        $record->delete();
        return redirect()->route('coupon')
                         ->with('success','Coupon Deleted Successfully');
    }

    public function edit($id){
        $record = coupon::find($id);
        return view('admin.coupon.edit',compact('record'));
    }

    public function update(Request $request, $id){

        $coupon =coupon::find($id);
        $coupon->coupon = $request->coupon;
        $coupon->discount = $request->discount;
        $coupon->quantity = $request->quantity;
        $coupon->amount = $request->amount;
        $coupon->value = $request->value;
        $coupon->start_date = $request->start_date;
        $coupon->end_date = $request->end_date;
        $coupon->save();
        return redirect()->route('coupon')
                         ->with('success','Coupon Updated Successfully');
    }

    public function status($id, Request $request){
        $record = coupon::find($id);
        if($record->status == 0){
         $record->status = 1;
         $record->save();
        }
         else
         { $record->status = 0;
          $record->save();
         }
        return redirect()->route('coupon')
                        ->with('success','Status Updated Successfully');
    }
}

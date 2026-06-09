<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillingController extends Controller
{
    public function storeBill(Request $request){
        $request->validate([
            'name'=>'required',
            'phone' => 'required|digits:10',
            'email'=>'required',
            'city'=>'required|string',
            'zipcode'=>'required|integer',
            'date'=>'required',
            'source'=>'required',
            'Srequest'=>'required',
            'lastName'=>'required',
            'phoneWork'=>'required',
            'address'=>'required',
            'state'=>'required',
            'time'=>'required',
        ]);

        Bill::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'city'=>$request->city,
            'zipcode'=>$request->zipcode,
            'date'=>$request->date,
            'source'=>$request->source,
            'Srequest'=>$request->Srequest,
            'lastName'=>$request->lastName,
            'phoneWork'=>$request->phoneWork,
            'address'=>$request->address,
            'state'=>$request->state,
            'time'=>$request->time,
        ]);
         DB::table('_add_cart_view')->delete();

        return redirect()->route('product.bars')->with('success', 'Order placed and cart cleared!');
}
}

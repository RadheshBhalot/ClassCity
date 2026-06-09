<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;

class AddCartViewController extends Controller
{
    public function AddCart(Request $request)
    {
        $validated = $request->validate([
            'productName' => 'required|string',
            'image' => 'required|string|unique:_add_cart_view,image',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
        ]);

        $subtotal = $validated['price'] * $validated['quantity'];

        Cart::create([
            'productName' => $validated['productName'],
            'image'       => $validated['image'],
            'price'       => $validated['price'],
            'quantity'    => $validated['quantity'],
            'Subtotal'    => $subtotal,
        ]);

        return redirect()->back()->with('success', 'Item added to cart!');
    }
    public function delete($id)
    {
        DB::table('_add_cart_view')->where('id', $id)->delete();
        return redirect()->route('shoppingcart.view');
    }

    public function view()
    {
        $viewCart = DB::table('_add_cart_view')->get();
        $total = DB::table('_add_cart_view')->sum('Subtotal');

        return view('ShoppingcartView', ['view' => $viewCart, 'total' => $total]);
    }

    public function billing()
    {
        $viewCart = DB::table('_add_cart_view')->get();
        $total = DB::table('_add_cart_view')->sum('Subtotal');

        return view('BillingInformation', ['view' => $viewCart, 'total' => $total]);
    }
};



































//    public function AddCart(Request $request)
// {
//     $validated = $request->validate([
//         'productName' => 'required|string',
//         'image' => 'required|string',
//         'price' => 'required|numeric',
//         'quantity' => 'required|integer|min:1',
//     ]);

//     $subtotal = $validated['price'] * $validated['quantity'];
//       $imagePath = null;
//         if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $imageName = 'doctor_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
//             $image->move(public_path('uploads'), $imageName);
//             $imagePath = 'uploads/' . $imageName;
//         }
//     Cart::create([
//         'productName'=>$request->productName,   
//         'image'   => $request->image,
//         'price'=>$request->price,
//         'quantity'=>$request->quantity,
//         'Subtotal'=>$subtotal,
//     ]);

//     return redirect()->back()->with('success', 'Item added to cart!');
//  }

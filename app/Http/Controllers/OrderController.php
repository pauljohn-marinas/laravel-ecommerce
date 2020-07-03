<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function destroy($id) {
        $order = Order::find($id);
        $order->delete();

        return redirect()->back();
    }
    public function store(Request $request) {
        $currentURL = \URL::current();
        $validatedData = $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        $order = new Order;
        $order->user_id = $request->input('user_id');
        $order->product_id = $request->input('product_id');
        $order->quantity = $request->input('quantity');
        $order->total = $request->input('price') * $request->input('quantity');
        $order->save();
        if($currentURL == 'http://127.0.0.1:8000/order/single'){
            return redirect('products');
        }else{
            return redirect()->back();
        }

        
        
    }
}

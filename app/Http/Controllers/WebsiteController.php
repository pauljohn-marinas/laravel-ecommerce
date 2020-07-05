<?php

namespace App\Http\Controllers;

use App\Message;
use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WebsiteController extends Controller
{
    public function index() {
        $products = Product::take(4)->get();
        return view('shop.index', compact('products'));
    }

    public function productDetail($id) {
        $product = Product::find($id);
        return view('shop.product-detail', compact('product'));
    }

    public function product() {
        $products = Product::orderBy('id', 'desc')->paginate(8);
        return view('shop.products', compact('products'));
    }

    public function create() {
        return view('shop.contact');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required',
        ]);
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->content = $request->input('content');
        $message->save();
        return redirect('/home');
    }
    public function cart() {
        // $orders = auth()->user()->orders;
        $orders = Order::with('product','user')
                        ->where('user_id', auth()->user()->id)
                        ->get();
        // $orders = DB::table('orders')
        //     ->join('users', 'users.id', '=', 'orders.user_id')
        //     ->join('products', 'products.id', '=', 'orders.product_id')
        //     ->where('orders.user_id', auth()->user()->id)
        //     ->get();
            // dd($orders);
        return view('shop.cart', compact('orders'));
    }
}

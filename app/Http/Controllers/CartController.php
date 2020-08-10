<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Contact;
use App\Cart;

class CartController extends Controller
{
    public function index() {
        $carts;
        $check_user = Auth::user();
        $contacts = Contact::all();
        if ($check_user) {
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.cart', compact('contacts', 'carts'));
        } else {
            return abort(404);
        }
    }

    public function store(Request $request) {
        $product = Cart::where('product_id', $request->product)->where('user_id', Auth::user()->id)->first();
        if ($product) {
            return redirect('/cart');
        }
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product,
            'qty' => 1
        ]);
        return redirect('/cart');
    }

    public function update(Request $request, Cart $id) {
        $id->update([
            'qty' => $request->satuan
        ]);
    }
}

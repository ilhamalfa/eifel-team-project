<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\cart;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $data = Buku::all();
        $cart = Cart::where('user_id', '=', auth()->user()->id)->count();
        
        return view('customer.index', [
            'bukus' => $data,
            'cart' => $cart,
        ]);
    }

    public function store(Request $request){
        $buku = Buku::findOrFail($request->id);
        $cart = cart::where('buku_id', $buku->id)->Where('user_id', auth()->user()->id)->first();

        if($cart != NULL && $cart->buku_id == $buku->id && $cart->user_id == auth()->user()->id){
            $data = cart::find($cart->id);

            $data->update([
                'jumlah' => $cart->jumlah + $request->qty,
                'harga' => $cart->harga + ($buku->harga * $request->qty)
            ]);
        }else{
            cart::create([
                'user_id' => auth()->user()->id,
                'buku_id' => $buku->id,
                'jumlah' => $request->qty,
                'harga' => $buku->harga * $request->qty
            ]);
        }

        return redirect(url('customer'))->with('success', 'Berhasil Menambahkan ke Keranjang');
    }

    public function list(){
        $cart = Cart::where('user_id', '=', auth()->user()->id)->get();
        $total = Cart::sum('harga'); //Total Harga

        return view('customer.cart', [
            'carts' => $cart,
            'total' => $total
        ]);
    }

    public function deleteCart($id)
    {
        $cart = cart::find($id);

        $cart->delete($cart);

        return redirect(url('customer/cart'))->with('success', 'Berhasil Menghapus Data');
    }
}

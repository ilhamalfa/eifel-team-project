<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\cart;
use App\Models\detailPemesanan;
use App\Models\Pemesanan;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    public function index(){
        $data = Buku::all();
        $jml_cart = Cart::where('user_id', '=', auth()->user()->id)->count();
        
        return view('customer.homepage', [
            'bukus' => $data,
            'jml_cart' => $jml_cart,
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
        $jml_cart = Cart::where('user_id', '=', auth()->user()->id)->count();
        $cart = Cart::where('user_id', '=', auth()->user()->id)->get();
        $total = Cart::where('user_id', '=', auth()->user()->id)->sum('harga'); //Total Harga

        return view('customer.cart', [
            'jml_cart' => $jml_cart,
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

    public function checkOut(Request $request)
    {
        // $id = $request();
        // return $request;
        // $count = count($request->item);
        $total_buku = 0;
        $total_harga = 0;
        // dd($count);

        // for($i = 1; $i <= $count; $i++){
            
        // }

        // Menghitung Jumlah Buku dan Jumlah Harga
        foreach($request->item as $key=>$value){
            // echo $value;
            $cart = cart::where('id', $value)->first();
            
            $total_buku = $total_buku + $cart->jumlah;
            $total_harga = $total_harga + $cart->harga;
        }

        $date = date('Y-m-d H:i:s');

        Pemesanan::create([
            'user_id' => auth()->user()->id,
            'totalBuku' => $total_buku,
            'totalHarga' => $total_harga,
            'ongkir' => 1000,
            'tanggalPemesanan' => $date,
            'metodePembayaran' => 'Gopai',
            'statusPemesanan' => 'Pending'
        ]);

        $pemesanan = Pemesanan::where('user_id', auth()->user()->id)->where('tanggalPemesanan', $date )->first();

        // dd($pemesanan);
        foreach($request->item as $key=>$value){
            // echo $value;
            $cart = cart::where('id', $value)->first();
            
            detailPemesanan::create([
                'pemesanan_id' => $pemesanan->id,
                'buku_id' => $cart->buku_id,
                'qty' => $cart->jumlah,
                'harga' => $cart->harga
            ]);

            // Update Jumlah Buku
            $buku = Buku::find($cart->buku_id);

            $buku->update([
                'jumlah' => $buku->jumlah - $cart->qty 
            ]);

            // Delete Item Di Cart
            $cart_delete = cart::find($cart->id);

            $cart_delete->delete();
        }

        return redirect(url('customer/cart'))->with('success', 'Berhasil Check-out');
    }

    public function alamat(){
        $provinsi = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json')->json();

        return view('customer.alamat',[
            'provinsi' => $provinsi
        ]);
    }

    public function storeAlamat(Request $request){
        dd($request);
    }

}

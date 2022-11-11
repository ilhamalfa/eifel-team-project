<?php

namespace App\Http\Controllers;

use App\Models\alamat;
use App\Models\Buku;
use App\Models\cart;
use App\Models\detailPemesanan;
use App\Models\kategori;
use App\Models\Pemesanan;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Midtrans\Config;
use Midtrans\Snap;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Buku::where('judul', 'LIKE', '%' . $request->search . '%')->orWhere('penulis', 'LIKE', '%' . $request->search . '%')->orWhere('penerbit', 'LIKE', '%' . $request->search . '%')->get();
        } else if ($request->has('kategori')) {
            $data = Buku::where('kategori_id', '=', $request->kategori)->get();
        } else {
            $data = Buku::all();
        }

        $kategori = kategori::all();
        $jml_cart = Cart::where('user_id', '=', auth()->user()->id)->count();

        return view('customer.homepage', [
            'listbuku' => $data,
            'kategori' => $kategori,
            'jml_cart' => $jml_cart,
        ]);
    }

    public function store(Request $request)
    {
        $buku = Buku::findOrFail($request->id);
        $cart = cart::where('buku_id', $buku->id)->Where('user_id', auth()->user()->id)->first();

        if ($cart != NULL && $cart->buku_id == $buku->id && $cart->user_id == auth()->user()->id) {
            $data = cart::find($cart->id);

            $data->update([
                'jumlah' => $cart->jumlah + $request->qty,
                'harga' => $cart->harga + ($buku->harga * $request->qty)
            ]);
        } else {
            cart::create([
                'user_id' => auth()->user()->id,
                'buku_id' => $buku->id,
                'jumlah' => $request->qty,
                'harga' => $buku->harga * $request->qty
            ]);
        }

        return redirect(url('customer'))->with('success', 'Berhasil Menambahkan ke Keranjang');
    }

    public function list()
    {
        $jml_cart = cart::where('user_id', '=', auth()->user()->id)->count();
        $cart = cart::where('user_id', '=', auth()->user()->id)->get();
        $total = cart::where('user_id', '=', auth()->user()->id)->sum('harga'); //Total Harga
        $kategori = kategori::all();

        return view('customer.cart', [
            'jml_cart' => $jml_cart,
            'kategori' => $kategori,
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
        foreach ($request->item as $key => $value) {
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

        $pemesanan = Pemesanan::where('user_id', auth()->user()->id)->where('tanggalPemesanan', $date)->first();

        // dd($pemesanan);
        foreach ($request->item as $key => $value) {
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

        $jml_cart = Cart::where('user_id', '=', auth()->user()->id)->count();

        return view('customer.midtrans', [
            'id' => $pemesanan->id,
            'jml_cart' => $jml_cart,
            'kategori' => kategori::all()
        ]);
    }

    // public function midtransView(){
    //     return \view()
    // }

    public function midtrans($id){
                $pemesanan = Pemesanan::find($id);

                // Set your Merchant Server Key
                Config::$serverKey = 'SB-Mid-server-cq7kRbuqRQgu7TrMOWyyvTNF';
                // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
                Config::$isProduction = false;
                // Set sanitization on (default)
                Config::$isSanitized = true;
                // Set 3DS transaction for credit card to true
                Config::$is3ds = true;
        
                $params = array(
                    'transaction_details' => array(
                        'order_id' => $pemesanan->id,
                        'gross_amount' => $pemesanan->totalHarga + $pemesanan->ongkir,
                    ),
                    "enabled_payments" => [
                        "bank_transfer", "shopeepay", "gopay"
                    ],
                );
                
                $snapToken = Snap::getSnapToken($params);
        
                return json_encode($snapToken);
    }

    public function alamat()
    {
        $jml_cart = Cart::where('user_id', '=', auth()->user()->id)->count();
        $kategori = kategori::all();

        return view('customer.alamat',[
            'kategori' => $kategori,
            'jml_cart' => $jml_cart,
        ]);
    }

    public function wilayah(){
        $wilayah = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');

        return $wilayah->json();
        // dd($wilayah->json());
    }

    public function storeAlamat(Request $request)
    {
        // dd($request);
        $prov = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        $decpro = json_decode($prov, true);
        $jml = sizeof($decpro);

        for($i = 0; $i < $jml; $i++){
            if($decpro[$i]['id'] == $request->provinces){
                $prov = $decpro[$i]['name'];
            }
        }

        $kota = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/regencies/'.$request->provinces.'.json');
        $decpro = json_decode($kota, true);
        $jml = sizeof($decpro);

        for($i = 0; $i < $jml; $i++){
            if($decpro[$i]['id'] == $request->regencies){
                $kota = $decpro[$i]['name'];
            }
        }

        $kec = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/districts/'.$request->regencies.'.json');
        $decpro = json_decode($kec, true);
        $jml = sizeof($decpro);

        for($i = 0; $i < $jml; $i++){
            if($decpro[$i]['id'] == $request->districts){
                $kec = $decpro[$i]['name'];
            }
        }

        $kel = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/villages/'.$request->districts.'.json');
        $decpro = json_decode($kel, true);
        $jml = sizeof($decpro);

        for($i = 0; $i < $jml; $i++){
            if($decpro[$i]['id'] == $request->villages){
                $kel = $decpro[$i]['name'];
            }
        }
        
        alamat::create([
            'provinsi' => $prov,
            'kota_kab' => $kota,
            'kecamatan' => $kec,
            'kelurahan' => $kel,
            'detail_alamat' => 'Tes',
            'user_id' => Auth()->user()->id
        ]);

        // return \redirect('alamat')
    }

    public function history(Request $request)
    {
        // dd($request);
        $kategori = kategori::all();
        $jml_cart = Cart::where('user_id', '=', auth()->user()->id)->count();

        $data = Pemesanan::where('user_id', '=', auth()->user()->id)->get();
        return view('customer.history', [
            'listhistory' => $data,
            'kategori' => $kategori,
            'jml_cart' => $jml_cart,
        ]);
    }
}
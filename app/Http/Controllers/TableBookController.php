<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\kategori;
use Illuminate\Http\Request;

class TableBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::all();
<<<<<<< HEAD
        return view('book/tablebook', ['listbuku' => $data]);
=======

        return view('admin.daftar-buku.index', [
            'listbuku' => $data
        ]);
>>>>>>> 6e2ac5e25c5d5adaeb4b50bf319a418a3c9d4786
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $create = kategori::select('id', 'jenis_kategori')->get();
        $foreign = kategori::all();
<<<<<<< HEAD
        return view('book/createdatabook', ['kategori' => $foreign]);
=======
        return view('admin.daftar-buku.create', ['kategori' => $foreign]);
>>>>>>> 6e2ac5e25c5d5adaeb4b50bf319a418a3c9d4786
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'sinopsis' => 'required|string',
            'jumlah' => 'required|integer',
            'harga' => 'required|integer',
            'kategori_id' => 'required|integer'
        ]);

        Buku::create($validate);

        return redirect(url('buku'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $buku = Buku::with('kategori')->findOrFail($id);
        $kategori = kategori::where('id', '!=', $buku->kategori_id)->get(['id', 'jenis_kategori']);
        return view('book/updatedatabook', ['buku' => $buku, 'kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return redirect('/tablebook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // dd($id);
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('tablebook');
    }
}
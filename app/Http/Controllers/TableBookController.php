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
    public function index(Request $request)
    {
        // dd($request->search);
        if($request->has('search')){
            $data = Buku::where('judul','LIKE','%'.$request->search.'%')->orWhere('penulis','LIKE','%'.$request->search.'%')->orWhere('penerbit','LIKE','%'.$request->search.'%')->get();
        }else{
            $data = Buku::all();
        }
        // dd($data);
        
        
        // $data = Buku::all();
        // $caribuku = $request->caribuku;
        // dd($caribuku);
        // $data = Buku::where('penulis', 'LIKE', '%'.$caribuku.'%');

        return view('admin.daftar-buku.index', [
            'listbuku' => $data
        ]);
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
        return view('admin.daftar-buku.create', [
            'kategori' => $foreign
        ]);
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
        $buku = Buku::findOrFail($id);
        $kategori = kategori::all();

        return view('admin.daftar-buku.edit', [
            'buku' => $buku, 
            'kategori' => $kategori
        ]);
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
        // dd($request);
        $validate = $request->validate([
            'judul' => 'required',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'sinopsis' => 'required|string',
            'jumlah' => 'required|integer',
            'harga' => 'required|integer',
            'kategori_id' => 'required|integer'
        ]);

        $buku = Buku::find($id);

        $buku->update($validate);

        return redirect(url('buku'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findorFail($id);

        $buku->delete($buku);

        return redirect(url('buku'));
    }
}
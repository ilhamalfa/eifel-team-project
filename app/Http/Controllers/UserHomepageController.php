<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\kategori;
use Illuminate\Http\Request;

class UserHomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Buku::where('judul','LIKE','%'.$request->search.'%')->orWhere('penulis','LIKE','%'.$request->search.'%')->orWhere('penerbit','LIKE','%'.$request->search.'%')->get();
        }else if($request->has('kategori')){
            $data = Buku::where('kategori_id','=',$request->kategori)->get();
        }else{
            $data = Buku::all();
        }
        $kategori = kategori::all();
        return view('userhomepage', ['listbuku' => $data, 'kategori'=>$kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

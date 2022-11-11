<?php

namespace App\Http\Controllers;

use App\Exports\pemesananExport;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Excel;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pemesanan::all();
        return view('pemesanan.tabel', compact('data'));
    }

    public function export()
    {
        $data = ('data_pemesanan_'.date('Y-m-d_H-i-s').'.xlsx');
        return Excel::download(new pemesananExport, $data);
    }
}

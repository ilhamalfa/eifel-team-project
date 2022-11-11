<?php
namespace App\Exports;

use App\Models\Pemesanan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\fromView;

class pemesananExport implements fromView
{
    public function view(): view
    {
        return view('pemesanan.tabel', ['data' => Pemesanan::all()]);
    }
}


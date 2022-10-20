<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'sinopsis',
        'jumlah',
        'harga',
        'kategori_id'
    ];

    protected $guarded = ['id'];

    public function kategori(){
        return $this -> belongsTo(kategori::class);
    }

    public function detail_pemesanan(){
        return $this -> hasMany(detailPemesanan::class);
    }
}

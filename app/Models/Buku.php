<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori(){
        return $this -> belongsTo(kategori::class);
    }

    public function detail_pemesanan(){
        return $this -> hasOne(detailPemesanan::class);
    }
}

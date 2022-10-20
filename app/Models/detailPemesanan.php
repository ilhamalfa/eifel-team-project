<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPemesanan extends Model
{
    protected $guarded = ['id'];

    public function buku(){
        return $this -> belongsTo(Buku::class);
    }

    public function pemesanan(){
        return $this -> belongsTo(Pemesanan::class);
    }
}

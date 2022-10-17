<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPemesanan extends Model
{
    protected $guarded = ['id'];

    public function Pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function Buku()
    {
        return $this->belongsTo(Buku::class);
    }
    use HasFactory;
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;
    //panggil tabel kategori buku
    protected $table = 'kategori_buku';
    //panggil primary key
    protected $primaryKey = 'idkategori_buku';
    //panggil field yang bisa di isi
    protected $fillable = [
        'kategori_buku'
    ];
}

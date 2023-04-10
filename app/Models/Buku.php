<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    //panggil tabel buku
    protected $table = 'buku';
    //panggil primary key 
    protected $primaryKey = 'id';
    //panggil field yang bisa di isi
    protected $fillable = [
        'id',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'harga',
        'stok',
        'kategori_id',
        'cover',
    ];
}

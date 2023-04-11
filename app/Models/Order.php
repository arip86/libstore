<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Order extends Model
{
    use HasFactory;

    //panggil table order relasi ke buku
    
    protected $table = 'order';
    //panggil primary key
    protected $primaryKey = 'id';
    //panggil fillable
    protected $fillable = [
        'id',
        'jumlah',
        'order_date',
        'book_idbook',

    ];
}

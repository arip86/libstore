<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //panggil table order
    protected $table = 'order';
    //panggil primary key
    protected $primaryKey = 'id';
    //panggil fillable
    protected $fillable = [
        'id',
        'pelanggan_id',//foreign key        
        'tanggal',
        'total_harga',
        'jumlah',
    ];
}

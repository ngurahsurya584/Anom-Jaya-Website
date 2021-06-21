<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
   
    /**
     * mass assigment
     */
     protected $fillable = [
        'code_barang',
        'nama_barang',
        'stock_barang',
        'satuan_barang',
        'harga_pokok_barang',
        'Pemasok_barang',
    ];

}
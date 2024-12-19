<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barang_proses extends Model
{

    protected $table = 'tb_barang_proses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_kode_barang',
        'kode_barang',
        'quantity',
        'asal_barang'
    ];

    use HasFactory;
}

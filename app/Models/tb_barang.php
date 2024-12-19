<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barang extends Model
{
    protected $table = 'tb_barang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'stok'
    ];

    public function tb_barang_proses()
    {
        return $this->hasMany(tb_barang_masuk::class, 'no_kode_barang', 'id');
    }
    use HasFactory;
}

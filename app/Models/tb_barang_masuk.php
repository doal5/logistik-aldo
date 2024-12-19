<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barang_masuk extends Model
{

    protected $table = 'tb_barang_masuk';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_kode_barang',
        'kode_barang',
        'quantity',
        'asal_barang',
        'tanggal_masuk',
    ];

    public function tb_barang()
    {
        return $this->belongsTo(tb_barang::class, 'no_kode_barang', 'id');
    }

    public static function simpanBarangMasuk($data)
    {
        $barang = tb_barang::find($data['nama_barang']);

        $barangMasuk =  self::create([
            'no_kode_barang' => $barang->id,
            'kode_barang' => $barang->kode_barang,
            'quantity' => $data['quantity'],
            'asal_barang' => $data['asal_barang'],
            'tanggal_masuk' => $data['tanggal_masuk'],
        ]);

        // update stok barang
        $barang->update([
            'stok' => $barang->stok + $data['quantity']
        ]);

        return $barangMasuk;
    }

    use HasFactory;
}

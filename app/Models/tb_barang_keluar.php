<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barang_keluar extends Model
{
    protected $table = 'tb_barang_keluar';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_kode_barang',
        'kode_barang',
        'quantity',
        'tujuan_barang',
        'tanggal_keluar',
    ];

    public function tb_barang()
    {
        return $this->belongsTo(tb_barang::class, 'no_kode_barang', 'id');
    }

    public static function simpanBarangKeluar($data)
    {
        // Mencari barang berdasarkan id, nama barang berisi id
        $barang = tb_barang::find($data['nama_barang']);

        // Mengecek apakah barang ditemukan
        if (!$barang) {
            return false;
        }

        // Mengecek apakah stok barang cukup
        if ($barang->stok <= 0) {
            return false;
        }

        // Proses penyimpanan barang keluar
        $barangKeluar =  self::create([
            'no_kode_barang' => $barang->id,
            'kode_barang' => $barang->kode_barang,
            'quantity' => $data['quantity'],
            'tujuan_barang' => $data['tujuan_barang'],
            'tanggal_keluar' => $data['tanggal_keluar'],
        ]);

        // Update stok barang setelah barang keluar
        $barang->update([
            'stok' => $barang->stok - $data['quantity']
        ]);

        return $barangKeluar;
    }

    use HasFactory;
}

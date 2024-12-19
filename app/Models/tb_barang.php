<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class tb_barang extends Model
{
    protected $table = 'tb_barang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'stok'
    ];

    public function tb_barang_masuk()
    {
        return $this->hasMany(tb_barang_masuk::class, 'no_kode_barang', 'id');
    }
    public function tb_barang_keluar()
    {
        return $this->hasMany(tb_barang_keluar::class, 'no_kode_barang', 'id');
    }

    public static function simpanBarang($data)
    {
        // Membuat kode barang acak (contoh: b-123abc)
        $kode_barang = 'B-' . strtoupper(Str::random(7));  // bisa menggunakan helper `str_random` atau `Str::random`

        $simpanBarang = self::create([
            'kode_barang' => $kode_barang,
            'nama_barang' => $data['nama_barang'],
            'stok' => 0,
        ]);

        return $simpanBarang;
    }


    use HasFactory;
}

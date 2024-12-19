<?php

namespace Database\Seeders;

use App\Models\tb_barang;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class TbBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_barang')->insert([
            [
                'kode_barang' => Str::upper(Str::random(10)),
                'nama_barang' => 'Barang A',
                'stok' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => Str::upper(Str::random(10)),
                'nama_barang' => 'Barang B',
                'stok' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => Str::upper(Str::random(10)),
                'nama_barang' => 'Barang C',
                'stok' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => Str::upper(Str::random(10)),
                'nama_barang' => 'Barang D',
                'stok' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => Str::upper(Str::random(10)),
                'nama_barang' => 'Barang E',
                'stok' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
};

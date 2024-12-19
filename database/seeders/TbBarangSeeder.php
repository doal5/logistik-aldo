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
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang A',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang B',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang C',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang D',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang E',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang F',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang G',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang H',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang I',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang J',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang K',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'B-' . Str::upper(Str::random(7)),
                'nama_barang' => 'Barang L',
                'stok' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
};

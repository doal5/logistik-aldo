<?php

namespace App\Http\Controllers;

use App\Models\tb_barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'barang' => tb_barang::latest()->paginate(10)
        ];
        return view('barang.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi form
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required|string|max:255',
        ]);

        $validatedData = $validator->validated();

        // Menyimpan data barang dengan stok default 0
        $simpan = tb_barang::simpanBarang($validatedData);

        // Set session flash untuk pesan sukses
        session()->flash('sukses', 'Data barang berhasil disimpan!');

        // Mengalihkan kembali ke halaman barang
        return redirect()->route('barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

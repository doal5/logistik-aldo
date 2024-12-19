<?php

namespace App\Http\Controllers;

use App\Models\tb_barang;
use App\Models\tb_barang_masuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangprosesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'barangProses' => tb_barang_masuk::where('status', 'masuk')->paginate(10)
        ];
        return view('barang_masuk.index', $data);
    }

    public function indexKeluar()
    {
        $data = [
            'barangProses' => tb_barang_masuk::where('status', 'keluar')->paginate(10)
        ];

        return view('barang_keluar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'barang' => tb_barang::all()
        ];
        return view('barang_masuk.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeMasuk(Request $request)
    {

        // validasi tiap form
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'quantity' => 'required|integer',
            'asal_barang' => 'required',
            'tanggal_masuk' => 'required',
        ]);

        $validatedData = $validator->validated();

        tb_barang_masuk::simpanBarangMasuk($validatedData);

        // Set session flash untuk pesan sukses
        session()->flash('sukses', 'Data masuk barang berhasil disimpan!');

        return redirect()->route('barang_masuk');
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

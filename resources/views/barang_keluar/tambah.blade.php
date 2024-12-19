@extends('layouts.master')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <h5 class="mb-4">Form Barang Keluar</h5>
                <div class="bg-light rounded h-100 p-4">
                    @if (session('sukses'))
                        <div class="alert alert-success">
                            {{ session('sukses') }}
                        </div>
                    @endif

                    <form action="{{ route('store_keluar') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="nama_barang" class="col-md-2 col-form-label">Pilih Barang</label>
                            <div class="col-md-10">
                                <select name="nama_barang" id="nama_barang" class="form-select">
                                    <option value="">-- Pilih Barang --</option>
                                    @foreach ($barang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_barang }} Kode :
                                            {{ $item->kode_barang }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="quantity" class="col-md-2 col-form-label">Quantity</label>
                            <div class="col-md-10">
                                <input type="number" id="quantity" class="form-control" name="quantity"
                                    placeholder="Masukkan jumlah barang">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="asal_barang" class="col-md-2 col-form-label">Tujuan Barang</label>
                            <div class="col-md-10">
                                <input type="text" id="tujuan_barang" class="form-control" name="tujuan_barang"
                                    placeholder="Masukkan tujuan barang">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_keluar" class="col-md-2 col-form-label">Tanggal Keluar</label>
                            <div class="col-md-10">
                                <input type="date" id="tanggal_keluar" class="form-control" name="tanggal_keluar">
                            </div>
                        </div>
                        <input type="hidden" name="status" value="masuk">
                        <div class="row">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

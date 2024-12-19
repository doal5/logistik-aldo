@extends('layouts.master')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <h5 class="mb-4">Form Barang Masuk</h5>
                <div class="bg-light rounded h-100 p-4">
                    @if (session('sukses'))
                        <div class="alert alert-success">
                            {{ session('sukses') }}
                        </div>
                    @endif

                    <form action="{{ route('store_masuk') }}" method="POST">
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
                            <label for="asal_barang" class="col-md-2 col-form-label">Asal Barang</label>
                            <div class="col-md-10">
                                <input type="text" id="asal_barang" class="form-control" name="asal_barang"
                                    placeholder="Masukkan asal barang">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_masuk" class="col-md-2 col-form-label">Tanggal Masuk</label>
                            <div class="col-md-10">
                                <input type="date" id="tanggal_masuk" class="form-control" name="tanggal_masuk">
                            </div>
                        </div>
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

@push('script')
    <script>
        $('#table-barang').DataTable({
            "paging": false,
            "searching": true,
            "ordering": true,
            "info": false,
            "lengthChange": true,
            "language": {
                "search": "Cari:",
                "zeroRecords": "Data tidak ditemukan",
                "infoEmpty": "Tidak ada data yang tersedia",
            }
        });
    </script>
@endpush

@extends('layouts.master')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <h5 class="mb-4">Form Tambah Barang</h5>
                <div class="bg-light rounded h-100 p-4">

                    <form action="{{ route('store_barang') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="nama_barang" class="col-md-2 col-form-label">Nama Barang</label>
                            <div class="col-md-10">
                                <input type="text" name="nama_barang" class="form-control">
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

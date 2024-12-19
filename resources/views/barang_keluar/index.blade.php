@extends('layouts.master')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <h5 class="mb-4">Barang Keluar</h5>
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Data Barang Keluar</h6>
                    @if (session('sukses'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('sukses') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <div class="btn-group">
                            <a href="{{ route('barang_masuk_tambah') }}">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-plus"> </i>
                                    Tambah</button>
                            </a>
                        </div>
                        <div class="response "></div>
                        <table class="table" id="table-barang">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Barang Masuk</th>
                                    <th>Kode Barang</th>
                                    <th>Quantity</th>
                                    <th>Origin Asal Barang</th>
                                    <th>Tanggal Masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangProses as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->tb_barang->kode_barang }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->asal_barang }}</td>
                                        <td>{{ Carbon\Carbon::parse($item->tanggal_masuk)->format('d-F-Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $('#table-barang').DataTable({
            "paging": false, // Mengaktifkan pagination
            "searching": true, // Mengaktifkan pencarian
            "ordering": true, // Mengaktifkan sorting
            "info": false, // Menampilkan informasi total data
            "lengthChange": true, // Pilihan untuk mengubah jumlah baris yang ditampilkan
            "language": {
                "search": "Cari:",
                "zeroRecords": "Data tidak ditemukan",
                "infoEmpty": "Tidak ada data yang tersedia",
            }
        });
    </script>
@endpush

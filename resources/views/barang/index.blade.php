@extends('layouts.master')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <h5 class="mb-4">Barang</h5>
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Data Barang</h6>
                    @if (session('sukses'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('sukses') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <div class="btn-group">
                            <a href="{{ route('barang_create') }}">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-plus"> </i>
                                    Tambah</button>
                            </a>
                        </div>
                        <div class="response"></div>
                        <table class="table" id="table-barang">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>kode barang</th>
                                    <th>nama barang</th>
                                    <th>stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_barang }}</td>
                                        <td>{{ $item->nama_barang }}</td>
                                        <td>{{ $item->stok }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $barang->links() }}

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

@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="card-title">Transaksi Tiket</h3>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table class="table table-sm table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengunjung</th>
                            <th>Jadwal</th>
                            <th>Jumlah Tiket</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $v)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $v->nama_pengunjung }}</td>
                            <td>{{ $v->jadwal->tanggal }} {{ $v->jadwal->jam }}</td>
                            <td>{{ $v->jumlah_tiket }}</td>
                            <td>{{ number_format($v->total_harga, 0, ',', '.') }}</td>
                            <td>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
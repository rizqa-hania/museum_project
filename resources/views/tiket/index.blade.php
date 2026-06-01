@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="card-title">Manajemen Tiket</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('tiket.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Kategori Tiket Baru
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-sm table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($semuaTiket as $tiket)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tiket->nama_kategori }}</td>
                            <td>{{ $tiket->harga }}</td>
                            <td>{{ $tiket->deskripsi }}</td>
                            <td>
                                <form action="{{ route('tiket.destroy', $tiket->kategori_id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('tiket.edit', $tiket->kategori_id) }}" class="btn btn-success btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus kategori tiket ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
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
@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Kategori Tiket</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('tiket.update', $tiket->kategori_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" value="{{ $tiket->nama_kategori }}">
                        @error('nama_kategori')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $tiket->harga }}">
                        @error('harga')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control">{{ $tiket->deskripsi }}</textarea>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('tiket.index') }}" class="btn btn-secondary btn-sm px-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
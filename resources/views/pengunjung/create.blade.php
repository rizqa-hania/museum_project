@extends('template.pengunjung.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Silahkan Isi Data Pengunjung</h3>
            </div>
            <form action="{{ route('pengunjung.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
                    @error('nama')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_hp">No HP:</label>
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp">
                    @error('no_hp')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <a href="{{ route('welcome') }}" class="btn btn-secondary">Kembali ke Beranda</a>
                <button type="submit" class="btn btn-primary">Lanjut Pilih Tiket</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
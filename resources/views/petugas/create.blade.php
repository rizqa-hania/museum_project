@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Petugas Baru</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('petugas.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Petugas</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Shift</label>
                        <select name="shift" class="form-control @error('shift') is-invalid @enderror">
                            <option value="">Pilih Shift</option>
                            <option value="Pagi">Pagi</option>
                            <option value="Siang">Siang</option>
                            <option value="Malam">Malam</option>
                        </select>
                        @error('shift')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <a href="{{ route('petugas.index') }}" class="btn btn-secondary btn-sm px-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah Jadwal Museum</div>
                <form action="{{ route('jadwal.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label" id="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror">
                        @error('tanggal')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jam" class="form-label">Jam</label>
                        <input type="time" name="jam" class="form-control @error('jam') is-invalid @enderror">
                        @error('jam')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kuota" class="form-label">Kuota</label>
                        <input type="number" name="kuota" class="form-control @error('kuota') is-invalid @enderror">
                        @error('kuota')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <a href="{{route('jadwal.index')}}" class="btn btn-secondary btn-sm px-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
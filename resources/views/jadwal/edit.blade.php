@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Update Jadwal Museum
            </div>
            <form action="{{ route('jadwal.update', $jadwal->jadwal_id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label> 
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal', $jadwal->tanggal) }}">
                        @error('tanggal')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jam" class="form-label">Jam</label> 
                        <input type="time" class="form-control @error('jam') is-invalid @enderror" name="jam" value="{{ old('jam', $jadwal->jam) }}">
                        @error('jam')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kuota" class="form-label">Kuota</label> 
                        <input type="number" class="form-control @error('kuota') is-invalid @enderror" name="kuota" value="{{ old('kuota', $jadwal->kuota) }}">
                        @error('kuota')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('jadwal.index') }}" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Transaksi Tiket</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('transaksi.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_pengunjung">Nama Pengunjung</label>
                        <input type="text" class="form-control" id="nama_pengunjung" name="nama_pengunjung" required>
                    </div>
                    <div class="form-group">
                        <label for="jadwal_id">Jadwal</label>
                        <select class="form-control" id="jadwal_id" name="jadwal_id" required>
                            <option value="">Pilih Jadwal</option>
                            @foreach ($jadwal as $j)
                                <option value="{{ $j->jadwal_id }}">{{ $j->tanggal }} {{ $j->jam }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_tiket">Jumlah Tiket</label>
                        <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" min="1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('template.layout')
@section('content')
<head>
    <title>Isi Data Pengunjung</title>
</head>
<body>
    <h3>Silahkan Isi Data Pengunjung</h3>
    <form action="{{ route('pengunjung.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>No HP</label>
            <input type="text" name="no_hp">
        </div>

        <a href="{{ route('pengunjung.index') }}">Kembali ke Beranda</a>
        <button type="submit">Lanjut Pilih Tiket</button>
    </form>
</body>
@endsection
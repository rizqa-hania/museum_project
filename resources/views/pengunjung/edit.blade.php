<head>
    <title>Perbarui Data Pengunjung</title>
</head>
<body>
    <h3>Silahkan Periksa Kembali Data Pengunjung</h3>
    <form action="{{ route('pengunjung.update', $pengunjung->pengunjung_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $pengunjung->nama }}">
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ $pengunjung->email }}">
        </div>

        <div>
            <label>No HP</label>
            <input type="text" name="no_hp" value="{{ $pengunjung->no_hp }}">
        </div>

        <button type="submit">Simpan Perubahan & Lanjut</button>
        <a href="{{ route('transaksi.create', $pengunjung->pengunjung_id) }}">Batal</a>
    </form>
</body>
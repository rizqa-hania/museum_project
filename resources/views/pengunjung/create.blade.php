<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengunjung</title>
</head>
<body>

    <h1>Tambah Pengunjung</h1>

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

        <button type="submit">Simpan</button>
    </form>

</body>
</html>
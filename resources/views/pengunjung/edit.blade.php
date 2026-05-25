<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengunjung</title>
</head>
<body>

    <h1>Edit Pengunjung</h1>

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

        <button type="submit">Update</button>
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Petugas</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-warning">Edit Petugas: {{ $petugas->nama }}</div>
                    <div class="card-body">
                        <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
                            @csrf @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Petugas</label>
                                <input type="text" name="nama" class="form-control" value="{{ $petugas->nama }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <select name="jabatan" class="form-select">
                                    <option value="Kasir" {{ $petugas->jabatan == 'Kasir' ? 'selected' : '' }}>Kasir</option>
                                    <option value="Pemandu" {{ $petugas->jabatan == 'Pemandu' ? 'selected' : '' }}>Pemandu</option>
                                    <option value="Keamanan" {{ $petugas->jabatan == 'Keamanan' ? 'selected' : '' }}>Keamanan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Shift</label>
                                <select name="shift" class="form-select">
                                    <option value="Pagi" {{ $petugas->shift == 'Pagi' ? 'selected' : '' }}>Pagi</option>
                                    <option value="Siang" {{ $petugas->shift == 'Siang' ? 'selected' : '' }}>Siang</option>
                                    <option value="Malam" {{ $petugas->shift == 'Malam' ? 'selected' : '' }}>Malam</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $petugas->email }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengubah password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Update Data</button>
                            <a href="{{ route('petugas.index') }}" class="btn btn-link w-100 mt-2">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
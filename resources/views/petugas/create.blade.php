<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Petugas</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">Input Petugas Baru</div>
                    <div class="card-body">
                        <form action="{{ route('petugas.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Petugas</label>
                                <input type="text" name="nama_petugas" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <select name="jabatan" class="form-select" required>
                                    <option value="Kasir">Kasir</option>
                                    <option value="Pemandu">Pemandu</option>
                                    <option value="Keamanan">Keamanan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Shift</label>
                                <select name="shift" class="form-select">
                                    <option value="Pagi">Pagi</option>
                                    <option value="Siang">Siang</option>
                                    <option value="Malam">Malam</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Simpan Data</button>
                            <a href="{{ route('petugas.index') }}" class="btn btn-link w-100 mt-2">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
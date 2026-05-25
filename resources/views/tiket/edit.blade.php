<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tiket Museum</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">Edit Data Tiket</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tiket.update', $tiket->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Nama Pengunjung</label>
                                <input type="text" name="nama_pengunjung" class="form-control" value="{{ $tiket->nama_pengunjung }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Jenis Tiket</label>
                                <select name="jenis_tiket" class="form-select" required>
                                    <option value="Dewasa" {{ $tiket->jenis_tiket == 'Dewasa' ? 'selected' : '' }}>Dewasa</option>
                                    <option value="Anak-anak" {{ $tiket->jenis_tiket == 'Anak-anak' ? 'selected' : '' }}>Anak-anak</option>
                                    <option value="Turis Asing" {{ $tiket->jenis_tiket == 'Turis Asing' ? 'selected' : '' }}>Turis Asing</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" value="{{ $tiket->harga }}" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('tiket.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
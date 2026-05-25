<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Tiket</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Pesan Tiket Museum</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tiket.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Pengunjung</label>
                                <input type="text" name="nama_pengunjung" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Jenis Tiket</label>
                                <select name="jenis_tiket" class="form-select" required>
                                    <option value="Dewasa">Dewasa</option>
                                    <option value="Anak-anak">Anak-anak</option>
                                    <option value="Turis Asing">Turis Asing</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" placeholder="Contoh: 50000" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('tiket.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-success">Simpan Pesanan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
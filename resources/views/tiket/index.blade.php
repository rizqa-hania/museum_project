<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tiket Museum</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Daftar Tiket Museum</h2>
            <a href="{{ route('tiket.create') }}" class="btn btn-primary">Pesan Tiket Baru</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengunjung</th>
                            <th>Jenis Tiket</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($semuaTiket as $tiket)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tiket->nama_pengunjung }}</td>
                            <td>{{ $tiket->jenis_tiket }}</td>
                            <td>Rp {{ number_format($tiket->harga, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('tiket.destroy', $tiket->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin membatalkan tiket?')">Batal</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada tiket yang dipesan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori Tiket Museum</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Daftar Kategori Tiket Museum</h2>
            <a href="{{ route('tiket.create') }}" class="btn btn-primary">Tambah Kategori Tiket Baru</a>
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
                            <th>Nama Kategori</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($semuaTiket as $tiket)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tiket->nama_kategori }}</td>
                            <td>{{ $tiket->harga }}</td>
                            <td>{{ $tiket->deskripsi }}</td>
                            <td>
                                <form action="{{ route('tiket.destroy', $tiket->kategori_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('tiket.edit', $tiket->kategori_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus kategori tiket ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada kategori tiket yang tersedia.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
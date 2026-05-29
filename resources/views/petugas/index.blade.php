@extends('template.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Petugas Museum</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Manajemen Petugas</h4>
                <a href="{{ route('petugas.create') }}" class="btn btn-success btn-sm">Tambah Petugas</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table border="1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Shift</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($petugas as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td><span class="badge bg-info text-dark">{{ $p->jabatan }}</span></td>
                            <td>{{ $p->shift }}</td>
                            <td>{{ $p->email }}</td>
                            <td>
                                
                                <form action="{{ route('petugas.destroy', $p->petugas_id) }}" method="POST" class="d-inline">
                                    <a href="{{ route('petugas.edit', $p->petugas_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Data kosong.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
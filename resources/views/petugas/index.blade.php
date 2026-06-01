@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="card-title">Manajemen Petugas</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('petugas.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Petugas Baru
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-sm table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Shift</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $v)
                        <tr>
                            <td>{{ $v->nama }}</td>
                            <td>{{ $v->shift }}</td>
                            <td>{{ $v->email }}</td>
                            <td>
                                <form action="{{ route('petugas.destroy', $v->petugas_id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('petugas.edit', $v->petugas_id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus petugas ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
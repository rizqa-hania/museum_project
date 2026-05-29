<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="card-title">Jadwal Museum</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('jadwal.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Jadwal Baru
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table class="table table-sm table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Kuota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $v)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $v->tanggal }}</td>
                            <td>{{ $v->jam }}</td>
                            <td>{{ $v->kuota }}</td>
                            <td>
                                <form action="{{ route('jadwal.destroy', $v->jadwal_id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('jadwal.edit', $v->jadwal_id) }}" class="btn btn-success btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jadwal ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>pph
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


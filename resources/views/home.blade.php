@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Selamat datang, {{ Auth::user()->nama }} 👋</h3>
            </div>
            <div class="card-body">
            <p>
                Anda berhasil login sebagai petugas museum.
            </p>
            <p>
                Shift:
                <strong>{{ Auth::user()->shift }}</strong>
            </p>
            <p>
                Silakan pilih menu pada sidebar untuk mulai mengelola data museum.
            </p>
            </div>
        </div>
    </div>
</div>
@endsection
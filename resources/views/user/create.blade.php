@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">Tambah Pengguna</h3>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" placeholder="nama" name="name">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" placeholder="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="password" name="password">
                </div>
                <div class="mb-3">
                   <button class="btn btn-primary" name="simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

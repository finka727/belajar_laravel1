@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('service.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Paket</label>
                    <input type="text" class="form-control" placeholder="nama" name="service_name">
                </div>
                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" placeholder="harga" name="price">
                </div>
                <div class="mb-3">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" placeholder="deskripsi" name="description">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

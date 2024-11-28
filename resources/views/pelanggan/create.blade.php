@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('customer.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" class="form-control" placeholder="nama" name="customer_name">
                </div>
                <div class="mb-3">
                    <label for="">Telepon</label>
                    <input type="number" class="form-control" placeholder="telepon" name="phone">
                </div>
                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" placeholder="alamat" name="address">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

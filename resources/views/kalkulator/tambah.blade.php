@extends('kalkulator.index')
@section('content')
    <form action="{{ route('store-tambah') }}" method="post" style="margin-top: 20px">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" name="angka1" placeholder="Masukkan angka 1">
        <br>
        +
        <br>
        <label for="">Angka 2</label>
        <input type="text" name="angka2" placeholder="Masukkan angka 2">
        <br>
        <button>Proses</button>
    </form>

    <h3>Hasil :{{ $jumlah }} </h3>
@endsection

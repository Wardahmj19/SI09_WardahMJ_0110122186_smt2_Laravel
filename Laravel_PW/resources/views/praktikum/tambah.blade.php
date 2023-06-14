@extends('template/admin/index')

@section('content')
    <h1>Tambah Pelanggan</h1>
    <form action="{{ route('pelanggan.toko') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nama Pelanggan :</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Alamat :</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="no_hp">No. Handphone :</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
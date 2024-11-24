@extends('layout')

@section('content')
    <h4>create Menu</h4>

    <form action="{{ route('menu.submit') }}" method="POST">
        @csrf
        <label>Nama Menu</label>
        <input type="text" name="nama_menu" class="form-control">
        <label>Jenis</label>
        <select name="jenis" id="jenis" class="form-control" required>
            <option value="" disabled selected>--Pilih Kategori--</option>
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
        </select>
        <label>Harga</label>
        <input type="number" name="harga" class="form-control mb-4">
        @error('harga')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <button class="btn btn-primary">Create Menu</button>
    </form>
@endsection

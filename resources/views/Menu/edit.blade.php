@extends('layout')

@section('content')
    <h4>Edit Menu</h4>

    <form action="{{ route('menu.update', $menu->id) }}" method="POST">
        @csrf
        <label>Nama Menu</label>
        <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" class="form-control">
        <label>Jenis</label>
        <select name="jenis" id="jenis" class="form-control" required>
            <option value="" disabled {{ old('jenis', $menu['jenis']) == '' ? 'selected' : '' }}>--Pilih Kategori--</option>
            <option value="makanan" {{ old('jenis', $menu['jenis']) == 'makanan' ? 'selected' : '' }}>Makanan</option>
            <option value="minuman" {{ old('jenis', $menu['jenis']) == 'minuman' ? 'selected' : '' }}>Minuman</option>
        </select>
        
        <label>Harga</label>
        <input type="number" name="harga" value="{{ $menu->harga }}" class="form-control mb-4">

        <button class="btn btn-primary">Edit Menu</button>
    </form>
@endsection

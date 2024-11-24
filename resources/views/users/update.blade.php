@extends('layout')

@section('content')
    <h4>Edit User</h4>

    <form action="{{ route('update.submit', $users->id) }}" method="POST">
        @csrf
        <label>Nama Menu</label>
        <input type="text" name="name" value="{{ $users->name }}" class="form-control">
        <label>Email</label>
        <input type="text" name="email" value="{{ $users->email }}" class="form-control mb-4">
        <label>Password</label>
        <input type="text" name="password" value="" class="form-control mb-4">
        <label>Rolle</label>
        <select name="rolle" id="rolle" class="form-control" required>
            <option value="" disabled {{ old('rolle', $users['role']) == '' ? 'selected' : '' }}>--Pilih Kategori--</option>
            <option value="user" {{ old('role', $users['rolle']) == 'user' ? 'selected' : '' }}>User</option>
            <option value="admin" {{ old('rolle', $users['rolle']) == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="manager" {{ old('rolle', $users['rolle']) == 'manager' ? 'selected' : '' }}>Manager</option>
        </select>
        

        <button class="btn btn-primary">Edit Menu</button>
    </form>
@endsection

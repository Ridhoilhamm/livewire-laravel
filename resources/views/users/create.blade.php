@extends('layout')

@section('content')
    <h4>create Users</h4>

    <form action="{{ route('usersubmit') }}" method="POST">
        @csrf
        <label>Nama User</label>
        <input type="text" name="name" class="form-control">
        <label>Email</label>
        <input type="text" name="email" class="form-control mb-4">
        <label>Password</label>
        <input type="password" name="password" class="form-control mb-4">
        <label>Rolle</label>
        <select name="rolle" id="rolle" class="form-control mb-4" required>
            <option value="" disabled selected>--Pilih Role Anda--</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="manager">Manager</option>
        </select>

        <button class="btn btn-primary">Create User</button>
    </form>
@endsection

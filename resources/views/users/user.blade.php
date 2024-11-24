@extends('layout')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@section('content')
    <h3 class="text-center">Data Users</h3>
    <div class="d-flex">

        <div class="ms-auto">
            <a class="btn btn-success mb-4" href="{{ route('users.create') }}">Create User</a>
        </div>
    </div>
    <div>

        <table class="table table-bordered mx-auto">
            <tr class="table-primary text-center">
                <th>
                    No
                </th>
                <th>
                    Nama User
                </th>
                <th>
                    Email User
                </th>
                <th>
                    Role
                </th>
                <th>
                    Action
                </th>
            </tr>
        </div>

        
        
        @foreach ($users as $no => $data )
        <tr class="text-center">

            <div>
                <td>
                    {{ $no+1 }}
                </td>
                <td>
                    {{ $data->name }}
                </td>
                <td>
                    {{ $data->email }}
                </td>
                <td>
                    {{ $data->rolle }}
                </td>
                <td>
                    <div>
                        <a href="{{ route('user.update',$data->id) }}">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="{{ route('user.delete',$data->id) }}">
                            <i class="bi bi-trash3"></i>
                        </a>
                    </div>

                </td>
                
                @endforeach
            </div>
        </tr>
    </table>
        
@endsection

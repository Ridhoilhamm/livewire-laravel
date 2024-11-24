@extends('layout')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@section('content')
    <div class="d-flex">
        <h3>Data Menu</h3>
        <div class="ms-auto">
            <a class="btn btn-success" href="{{ route('menu.create') }}">Create Menu</a>

        </div>
    </div>
    <div>
       
        <table class="table table-bordered mx-auto">
            <tr class="table-primary text-center">
                <th>
                    No
                </th>
                <th>
                    Nama Menu
                </th>
                <th>
                    Jenis
                </th>
                <th>
                    Harga
                </th>
                <th>
                    Action
                </th>
            </tr>
    </div>
    @foreach ($menu as $no => $data)
        <tr class="text-center">
            <td>
                {{ $no + 1 }}
            </td>
            <td>
                {{ $data->nama_menu }}
            </td>
            <td>
                {{ $data->jenis }}
            </td>
            <td>
                {{ $data->harga }}
            </td>
            <td>
                <form action="{{ route('menu.delete', $data->id) }}" method="POST">
                    @csrf
                    <button  class="btn btn-danger btn-sm me-2">
                        <i class="bi bi-trash3"></i>
                </button>
                </form>
                
                <a href="{{ route('menu.edit',$data->id) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil"></i>
                </a>
            </td>   
        </tr>
    @endforeach

    </table>
@endsection

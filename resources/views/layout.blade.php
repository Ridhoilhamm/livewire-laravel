<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>

<body>
    <div class="h1 text-center ms-auto">coba crud laravel</div>
    <form action="{{ route('logout') }}" method="POST" class="ms-auto">
        @csrf
        <button class="btn btn-success ">Logout</button>


    </form>

    <div class="mt-3 container">
        @yield('content')

    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Registrasi</title>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="{{ route('submitRegistrasi') }}" method="POST" class="text-center">
            @csrf
            <h4>Regisitrasi</h4>
            <input type="text" name="name" class="form-control mb-3" placeholder="Username">
            <input type="text" name="email" class="form-control mb-3" placeholder="email@gmail.com">
            <input type="password" name="password" class="form-control mb-3" placeholder="Password">
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container ">
    <div class="p-4 d-flex flex-column justify-content-center">
        <h2 class="text-center">Login Aplikasi</h2>
        <hr>
        @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
        @endif
        <form action="{{ route('actionlogin') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control mt-2" placeholder="Email" required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" class="form-control mt-2" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
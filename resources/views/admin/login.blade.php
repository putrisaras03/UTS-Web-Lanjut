<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body style="background: white;"> <!-- Set background to white -->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #45496A">
        <a class="navbar-brand ms-3" href="{{ route('homes') }}">Queen Florist</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('homes') }}">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('prod') }}">Produk</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('log') }}">Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 500px; height: 500px; background:#E6E6FA">
            <h2 class="text-center my-4">Login</h2>
            <form action="{{ route('valids') }}" method="POST">
                @csrf
                <div class="form-group mt-3">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="admin" required>
                </div>
                <div class="form-group mt-3">
                    <label for="pswrd">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary" style="background-color: #7D8BAE; border-color: #7D8BAE;">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

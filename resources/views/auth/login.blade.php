@section('title', 'Login')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- CSS --}}
    <link href="{{ asset('bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- JS --}}
    <script src="{{ asset('bootstrap5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body class="text-center">
    <div class="p-5 m-5 d-flex justify-content-center ">
        <main>
            @if (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session()->get('error_message') }}
                </div>
            @endif
            @if (session()->has('pesan_berhasil'))
                <div class="alert alert-success">
                    {{ session()->get('pesan_berhasil') }}
                </div>
            @endif
            <form method="POST" action="{{ url('login') }} ">
                @csrf
                <h1 class="text-bold">Silahkan Login</h1>
                <div class="">
                    <label for="inputPassword2">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="">
                    <label for="inputPassword2">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary mt-3">Login</button>
                </div>
                <a href="{{ url('register') }}">Daftar</a>

            </form>
        </main>
    </div>







</body>

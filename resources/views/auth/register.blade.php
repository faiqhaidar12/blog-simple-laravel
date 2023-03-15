@section('title', 'Register')


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
    <div class="p-5 m-5 d-flex justify-content-center">
        <main>
            @if (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session()->get('error_message') }}
                </div>
            @endif
            <form method="POST" action="{{ url('register') }} ">
                @csrf
                <h1 class="text-bold">Silahkan Daftar</h1>
                <div class="">
                    <label for="inputPassword2">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="">
                    <label for="inputPassword2">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="">
                    <label for="inputPassword2">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="">
                    <label for="inputPassword2">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="konfirmasi_password"
                        placeholder="konfirmasi password">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary mt-3">Daftar</button>
                </div>
                <a href="{{ url('login') }}">Sudah punya akun?</a>
            </form>
        </main>
    </div>







</body>

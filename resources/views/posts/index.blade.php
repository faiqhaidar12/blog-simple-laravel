<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    {{-- CSS --}}
    <link href="{{ asset('bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- JS --}}
    <script src="{{ asset('bootstrap5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container ">
        <div class="m-1 d-flex justify-content-between">
            <h1>Blog Semiclon
            </h1>
            <a href="{{ url('posts/create') }}" class="btn btn-success m-1">+ Create Post</a>
        </div>
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text"><small class="text-muted">Last updated at
                            {{ date('d M Y ', strtotime($post->created_at)) }}</small></p>
                    <div class="m-1 d-flex justify-content-between">
                        <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
                        <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning ">Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>

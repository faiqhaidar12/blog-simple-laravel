<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link href="{{ asset('bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    {{-- JS --}}
    <script src="{{ asset('bootstrap5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Blog | Judul: {{ $post->title }}</title>
</head>

<body>
    <div class="container border my-5 pb-5 pt-5 rounded-5">
        <article class="blog-post">
            <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ date('d M Y H:i', strtotime($post->created_at)) }}</p>
            {{-- KONTEN --}}
            <p class="fw-light fs-5 text-muted">{{ $post->content }}</p>
            <hr>
            <small class="text-muted">{{ $total_komentar }} Komentar</small>
        </article>
        <div class="border m-5 rounded-5">
            @foreach ($comments as $comment)
                <div class="m-1 pb-5 p-1 pt-5">
                    <div class="card">
                        <div class="card-body">
                            <p>{{ $comment->comment }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ url('/posts') }}">Kembali</a>
    </div>
</body>

</html>

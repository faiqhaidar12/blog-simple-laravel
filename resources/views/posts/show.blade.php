@extends('layouts.app')

@section('title', "Judul: $post->title")

@section('content')
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
@endsection

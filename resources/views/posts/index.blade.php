@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <div class="m-1 d-flex justify-content-between">
        <h1>Blog Semiclon</h1>
        <a href="{{ url('posts/create') }}" class="btn btn-success m-1">+ Create Post</a>
    </div>
    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ Str::limit($post->content, 200) }}</p>
                <p class="card-text"><small class="text-muted">Last updated at
                        {{ date('d M Y ', strtotime($post->created_at)) }}</small></p>
                <div class="m-1 d-flex justify-content-between">
                    <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning ">Edit</a>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center align-content-center">
        {{ $posts->links() }}
    </div>
@endsection

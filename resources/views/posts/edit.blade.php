@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <div class="container border my-5 pb-5 pt-5 rounded-5">
        <h1>Edit Post</h1>
        <div class="d-flex justify-content-end align-content-center">
            <form action="{{ url("posts/$post->id") }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger m-1">
                    Hapus
                </button>
            </form>
        </div>
        <a href="{{ '/posts' }}">Kembali</a>
        <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea class="form-control" id="content" name="content" rows="10">{{ $post->content }}</textarea>
            </div>
            <div class="d-flex justify-content-center align-content-center">
                <button type="submit" class="btn btn-primary m-1 ">Edit</button>
            </div>
        </form>
    </div>
@endsection

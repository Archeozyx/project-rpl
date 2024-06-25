@extends('layout')

@section('content')
<x-header></x-header>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h2>Forum Diskusi</h2>

            @auth
            <form action="{{ route('forum.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar (opsional)</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Buat Post</button>
            </form>
            @else
            <p>Silakan <a href="{{ route('login') }}">login</a> untuk membuat post.</p>
            @endauth

            <div class="mt-4">
                @foreach($posts as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        @if($post->image_path)
                        <img src="{{ asset('storage/' . $post->image_path) }}" class="img-fluid mb-2" alt="Post Image">
                        @endif
                        <p class="card-text">{{ $post->content }}</p>
                        <p class="card-text"><small class="text-muted">Posted by {{ $post->user->name }} on {{ $post->created_at->format('m/d/Y H:i:s') }}</small></p>

                        <h6>Komentar:</h6>
                        @foreach($post->comments as $comment)
                        <div class="card mb-2">
                            <div class="card-body">
                                <p class="card-text">{{ $comment->content }}</p>
                                <p class="card-text"><small class="text-muted">Commented by {{ $comment->user->name }} on {{ $comment->created_at->format('m/d/Y H:i:s') }}</small></p>
                            </div>
                        </div>
                        @endforeach

                        @auth
                        <form action="{{ route('forum.comment', $post) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="comment" class="form-label">Tambah Komentar:</label>
                                <input type="text" class="form-control" id="comment" name="content" required>
                            </div>
                            <button type="submit" class="btn btn-secondary">Kirim</button>
                        </form>
                        @else
                        <p>Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan komentar.</p>
                        @endauth
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

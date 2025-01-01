@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Title -->
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required>

        <!-- Content -->
        <label for="content">Content:</label>
        <textarea name="content" id="content" required>{{ $post->content }}</textarea>

        <!-- Image Upload Field -->
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" accept="image/*">

        <!-- Existing Image Preview (if exists) -->
        @if ($post->image)
            <div class="mt-3">
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="img-fluid" style="max-width: 200px;">
                <p>Current Image</p>
            </div>
        @endif

        <button type="submit" class="btn btn-primary mt-3">Update Post</button>
    </form>
@endsection

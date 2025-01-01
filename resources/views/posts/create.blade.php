@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>

        <!-- Image Upload Field -->
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" accept="image/*">

        <button type="submit" class="btn btn-primary mt-3">Create Post</button>
    </form>
@endsection

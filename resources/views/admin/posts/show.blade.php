@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <img src="{{ $post->image }}" alt="{{ $post->title }}">
    <img src="{{ asset('storage/' . $post->uploaded_img) }}" alt="{{ $post->title }}">
    <p>
        {{ $post->content }}
    </p>
    <div class="text-center">
        <a href="{{ route('admin.posts.edit', ['post' => $post]) }}" class="btn btn-warning">Edita</a>
    </div>
@endsection

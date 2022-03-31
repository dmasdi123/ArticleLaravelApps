@extends('layout.main')
{{-- @dd($post) --}}
@section('container')

<h1>Post Category: {{ $category }}</h1>
@foreach ($posts as $post)
    <h1>
        <a href="/post/{{ $post->slug }}">{{ $post->title }} </a>
    </h1>
    <h2>{{ $post->excerpt }}</h2>
    <h5>{{ $post["body"] }}</h5>
@endforeach

@endsection
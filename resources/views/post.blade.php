@extends('layout.main')

@section('container')


<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8 mb-5">
         <h1 class="mb-4">{{ $post->title }}</h1>
            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {{-- <h5>{{ $post["author"] }}</h5> --}}
            {{-- {{ $post->body }} --}}
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
               {!! $post->body !!}
            </article>

         <a href="/blog" class="d-block">Kembali</a>
      </div>
   </div>
</div>



@endsection
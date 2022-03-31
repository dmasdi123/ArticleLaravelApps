@extends('layout.main')

@section('container')
<h1>Halaman Abouot</h1>
<h1>{{ $name }}</h1>
<h1>{{ $email }}</h1>
<img src="img/{{ $image }} " alt="" class="img-thumbnail rounded-circle">
@endsection
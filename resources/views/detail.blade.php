@extends('app')

@section('content')
    <h1>Halaman home</h1>
    <h2>{{ $article->title }}</h2>
    <img src="{{ asset("article/$article->image") }}" alt="">
    <div>{{ $article->description }}</div>
    <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
@endsection
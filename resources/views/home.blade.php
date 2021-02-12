@extends('app')

@section('content')
    <h1>Halaman home</h1>
    @auth
        Welcome {{ Auth::user()->name }}
    @endauth
    @foreach ($articles as $a)
        <div>
            <h2>{{ $a->title }}</h2>
            <a href="{{ route('detailArticle', $a->id) }}">
                <div>{{ $a->description }}</div>
            </a>
            <a href="{{ route('category', ['category' => $a->category->name])}}"><span>Category: {{ $a->category->name }}</span></a>
        </div>
    @endforeach
    {{-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}
@endsection
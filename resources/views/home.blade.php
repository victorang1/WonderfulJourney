@extends('app')

@section('content')
    <h1>Halaman home</h1>
    @auth
        Welcome {{ Auth::user()->name }}
    @endauth
    @foreach ($articles as $a)
        <a href="{{ route('detailArticle', $a->id) }}">
            <div>
                <h2>{{ $a->title }}</h2>
                <div>{{ $a->description }}</div>
                <span>Category: {{ $a->category->name }}</span>
            </div>
        </a>
    @endforeach
    {{-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}
@endsection
@extends('app')

@section('content')
    <h1>Category {{ app('request')->input('category') }}</h1>
    @foreach ($articles as $a)
        <div>
            <h2>{{ $a->title }}</h2>
            <a href="{{ route('detailArticle', $a->id) }}">
                <div>{{ $a->description }}</div>
            </a>
        </div>
    @endforeach
@endsection
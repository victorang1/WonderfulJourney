@extends('app')

@section('app-style')
    <style>
        .item {
            width: 30%;
        }
    </style>
@endsection

@section('content')
<div class="container mt-4">
    <h1>Category {{ app('request')->input('name') }}</h1>
    @if (count($articles) == 0)
        <h3 class="mt-3">No article yet...</h3>
    @else
        <div class="d-flex flex-wrap">
            @foreach ($articles as $article)
                <div class="card d-flex flex-column p-3 m-2 item">
                    <h2>{{ $article->title }}</h2>
                    <div class="d-flex flex-column">
                        <span style="height: 50px; overflow: hidden">
                            @if (strlen($article->description) > 75)
                                {{ substr($article->description, 0, 75) }} <a href="{{ route('detailArticle', $article->id) }}">...full story</a>
                            @else
                                {{ $article->description }}
                            @endif
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
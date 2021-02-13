@extends('app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $article->title }}</h2>
                    </div>
                    <img class="card-img-top img-fluid" src="{{ asset("article/$article->image") }}">
                    <div class="card-body">
                        <div>{{ $article->description }}</div>
                        <a href="{{ route('home') }}" class="btn btn-outline-dark mt-2">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
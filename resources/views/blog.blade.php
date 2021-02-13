@extends('app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="d-inline-flex mb-4">
                    <a href="{{ route('createArticle') }}" class="btn btn-dark">Create Blog</a>
                </div>
                @if (count($articles) == 0)
                    <h3 class="mt-3">No Articles</h3>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <form method="POST" action="{{ route('deleteArticle', $article->id) }}">
                                        @csrf
                                        <td><button class="btn btn-outline-danger" type="submit">Delete</button></td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
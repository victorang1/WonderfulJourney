@extends('app')

@section('content')
    <div class="d-flex justify-content-center mt-4">
        <div class="d-flex flex-column">
            <a href="{{ route('createArticle') }}" class="btn btn-primary">Create Blog</a>
            @if (count($articles) == 0)
                <h3 class="mt-3">No Articles</h3>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $a)
                            <tr>
                                <td>{{ $a->title }}</td>
                                <form method="POST" action="{{ route('deleteArticle', $a->id) }}">
                                    @csrf
                                    <td><button class="btn" type="submit">Delete</button></td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
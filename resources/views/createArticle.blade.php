@extends('app')

@section('app-style')
    <style>
        .text-title {
            font-size: 20px;
            font-weight: bold;
        }

        label {
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white text-title">{{ __('Create Blog') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createArticle') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">{{ __('Title:') }}</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                        </div>

                        <div class="form-group">
                            <label for="category">{{ __('Category:') }}</label>
                            <select name="category" class="form-control">
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="photo">{{ __('Photo:') }}</label>
                            <input id="photo" type="file" class="form-control" name="photo" accept="image/*" required>
                        </div>

                        <div class="form-group">
                            <label for="story">{{ __('Story:') }}</label>
                            <textarea rows="5" class="form-control" name="story" required></textarea>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-outline-dark btn-block">
                                {{ __('Submit') }}
                            </button>
                        </div>

                        @if($errors->any())
                            <h5 class="text-danger">{{$errors->first()}}</h5>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
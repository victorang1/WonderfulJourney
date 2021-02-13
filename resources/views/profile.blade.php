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
                <div class="card-header bg-dark text-white text-title">{{ __('Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateProfile') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name:') }}</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email:') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>    
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('Phone:') }}</label>
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone }}" required autocomplete="phone" required>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-outline-dark btn-block">
                                <b>
                                    {{ __('Update') }}
                                </b>
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
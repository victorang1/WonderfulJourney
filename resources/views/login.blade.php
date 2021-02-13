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
                <div class="card-header bg-dark text-white">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="role">{{ __('Login As:') }}</label>
                            <select name="role" class="form-control">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email:') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password:') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-outline-dark btn-block">
                                {{ __('Submit') }}
                            </button>
                        </div>

                        @if($errors->any())
                            <h5 class="text-danger mt-2">{{$errors->first()}}</h5>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
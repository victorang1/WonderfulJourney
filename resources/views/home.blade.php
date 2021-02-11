@extends('app')

@section('content')
    <h1>Halaman home</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection
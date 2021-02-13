@extends('app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                @if (count($users) == 0)
                    <h3>No available user registered in this website...</h3>
                @else
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <form method="POST" action="deleteUser/{{ $user->id }}">
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
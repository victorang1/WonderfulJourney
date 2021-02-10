@extends('app')

@section('content')
    <div class="d-flex justify-content-center">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                    <tr>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <form method="POST" action="{{ route('deleteUser', $u->id) }}">
                            @csrf
                            <td><button class="btn" type="submit">Delete</button></td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@extends('app')

@section('content')
    <div class="d-flex justify-content-center">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $a)
                    <tr>
                        <td>{{ $a->name }}</td>
                        <td>{{ $a->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
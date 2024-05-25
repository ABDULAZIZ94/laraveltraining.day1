@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <table class="table table-striped">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td><a href="{{ route('logout') }}">Logout</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $employees->links() }} <!-- Pagination links -->
</div>
@endsection
</html>

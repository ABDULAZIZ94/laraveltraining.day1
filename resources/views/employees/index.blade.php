@extends('layouts.app')

@section('content')
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->department }}</td>
            <td>
                <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Padam</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

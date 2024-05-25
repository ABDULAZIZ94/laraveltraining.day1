@extends('layouts.app')

@section('content')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
    }
    th {
        background-color: #04AA6D;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<table>
    <thead>
    <tr>
        <th>No. Pekerja</th>
        <th>Nama Pertama</th>
        <th>Nama Akhir</th>
        <th>Jantina</th>
        <th>Tarikh Pengambilan</th>
        <th>Tindakan</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->emp_no }}</td>
            <td>{{ $employee->first_name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->gender }}</td>
            <td>{{ $employee->hire_date }}</td>
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

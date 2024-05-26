@extends('layouts.app')

@section('content')
    {{-- Tambahkan notifikasi di sini --}}
    @if (session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 20px;">
            {{ session('error') }}
        </div>
    @endif

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
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

    <a href="{{ route('employees.create') }}" class="btn btn-success">Tambah Pekerja Baru</a>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Kembali</a>

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
                        <a href="{{ route('employees.show', $employee->emp_no) }}" class="btn btn-primary">Lihat</a>
                        <a href="/employees/edit/{{ $employee->emp_no }}" class="btn btn-warning">Edit</a>
                        <form action="/employees/destroy/{{ $employee->emp_no }}" method="POST">
                            @dump($employee->emp_no)
                            @csrf
                            <button type="submit">Padam</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

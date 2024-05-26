@extends('layouts.app')

@section('content')
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

    <a href="{{ route('forms.create') }}" class="btn btn-success">Tambah Department Baru</a>
    <a href="{{ route('forms.index') }}" class="btn btn-secondary">Kembali</a>

    <table>
        <thead>
            <tr>
                <th>No. Department</th>
                <th>Nama Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($department as $department)
                <tr>
                    <td>{{ $department->dept_no }}</td>
                    <td>{{ $department->dept_name }}</td>
                    <td>
                        <a href="{{ route('forms.edit', ['id' => $department->id]) }}" >Kemaskini</a>
                        <a href="{{ route('forms.patch', ['id' => $department->id]) }}">Patch</a>
                        <form action="{{ route('spoof.destroy', ['id' => $department->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Padam</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

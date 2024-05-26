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
            @foreach ($departments as $department)
                <tr>
                    <td>{{ $department->dept_no }}</td>
                    <td>{{ $department->dept_name }}</td>
                    <td>

                        <a href="{{ route('forms.put', $department->dept_no) }}" class="btn btn-secondary">Put</a>
                        <a href="{{ route('forms.patch', $department->dept_no) }}" class="btn btn-secondary">Patch</a>
                          <form action="{{ route('spoof.delete', $department->dept_no) }}" method="POST">
                        {{-- <form action="/method/spoof/{{$department->dept_no}}" method="POST"> --}}
                            @method('DELETE')
                            @csrf
                            {{-- @dump($department->dept_no) --}}
                            <button type="submit">Padam</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

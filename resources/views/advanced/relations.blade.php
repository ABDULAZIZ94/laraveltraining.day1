@extends('layouts.app')

@section('content')
    <div class="my-3">
        <a href="{{ route('advanced.index') }}" class="btn btn-primary ">Indeks</a>
        <a href="{{ route('advanced.relations') }}" class="btn btn-primary ">Hubungan</a>
        <a href="{{ route('advanced.requestparameter') }}" class="btn btn-primary ">Parameter Pilihan</a>
        <a href="{{ route('advanced.middleware') }}" class="btn btn-primary ">Middleware</a>
        <a href="{{ route('advanced.ajax') }}" class="btn btn-primary ">AJAX</a>
        <a href="{{ route('advanced.datatable') }}" class="btn btn-primary ">Data Table</a>
    </div>

    <div class="my-3">
        <a href="{{ route('advanced.relrec1') }}" class="btn btn-primary ">Muat Data Rekod Hubungan 1</a>
        <a href="{{ route('advanced.relrec2') }}" class="btn btn-primary ">Muat Data Rekod Hubungan 2</a>
        <a href="{{ route('advanced.rel1') }}" class="btn btn-primary ">Muat Data Hubungan 1</a>
        <a href="{{ route('advanced.join1') }}" class="btn btn-primary ">Muat Data Join 1</a>
    </div>


    <table id="relationsTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No. Pekerja</th>
                <th>No. Jabatan</th>
                <th>Tarikh Mula</th>
                <th>Tarikh Tamat</th>
            </tr>
        </thead>
        <tbody>
            @isset($dep_emp)
                @foreach ($dep_emp as $de)
                    <tr>
                        <td>{{ $de->emp_no }}</td>
                        <td>{{ $de->dept_no }}</td>
                        <td>{{ $de->from_date }}</td>
                        <td>{{ $de->to_date }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Tiada data ditemui.</td>
                </tr>
            @endisset
        </tbody>
    </table>
@endsection

@extends('layouts.app')

@section('content')
    <div >
        <a href="{{ route('advanced.index') }}" class="btn btn-primary ">Indeks</a>
        <a href="{{ route('advanced.relations') }}" class="btn btn-primary ">Hubungan</a>
        <a href="{{ route('advanced.requestparameter') }}" class="btn btn-primary ">Parameter Pilihan</a>
        <a href="{{ route('advanced.middleware') }}" class="btn btn-primary ">Middleware</a>
        <a href="{{ route('advanced.ajax') }}" class="btn btn-primary ">AJAX</a>
        <a href="{{ route('advanced.datatable') }}" class="btn btn-primary ">Data Table</a>
    </div>

    <div>
        <button id="loadRelations" class="btn btn-primary ">Muat Hubungan</button>
        <a href="{{ route('advanced.rel1') }}" class="btn btn-primary ">Muat Data Hubungan</a>
        <a href="{{ route('advanced.rel2') }}" class="btn btn-primary ">Muat Data Hubungan</a>
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

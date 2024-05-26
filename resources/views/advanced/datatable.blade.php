@extends('layouts.app')

@section('content')
    <button id="loadRelations" class="btn btn-primary">Muat Hubungan</button>

    <!-- Butang Pautan -->
    <div class="row">
        <a href="{{ url('/') }}" class="btn btn-primary">Indeks</a>
        <a href="{{ route('advanced.index') }}" class="btn btn-primary">Hubungan</a>
        <a href="{{ route('advanced.requestparameter') }}" class="btn btn-primary">Parameter Pilihan</a>
        <a href="{{ route('advanced.middleware') }}" class="btn btn-primary">Middleware</a>
        <a href="{{ route('advanced.ajax') }}" class="btn btn-primary">AJAX</a>
        <a href="{{ route('advanced.datatable') }}" class="btn btn-primary">Data Table</a>
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
            @isset ($dep_emp)
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

@section('scripts')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    var table = $('#relationsTable').DataTable({
        ajax: {
            url: '{{ route("advanced.rel1") }}',
            dataSrc: ''
        },
        columns: [
            { data: 'emp_no' },
            { data: 'dept_no' },
            { data: 'from_date' },
            { data: 'to_date' }
        ]
    });

    $('#loadRelations').on('click', function() {
        table.ajax.reload();
    });
});
</script>
@endsection



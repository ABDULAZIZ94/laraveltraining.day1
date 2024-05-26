@extends('layouts.app')

@section('content')

    <div class="row">
        <a href="{{ url('/') }}" class="btn btn-primary">Indeks</a>
        <a href="{{ route('advanced.index') }}" class="btn btn-primary">Hubungan</a>
        <a href="{{ route('advanced.requestparameter') }}" class="btn btn-primary">Parameter Pilihan</a>
        <a href="{{ route('advanced.middleware') }}" class="btn btn-primary">Middleware</a>
        <a href="{{ route('advanced.ajax') }}" class="btn btn-primary">AJAX</a>
        <a href="{{ route('advanced.datatable') }}" class="btn btn-primary">Data Table</a>
    </div>

    <!-- Butang Pautan -->
    <div>
        <button id="loadRelations" class="btn btn-primary">Muat Hubungan</button>
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

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#loadRelations').on('click', function() {
                $.ajax({
                    url: '{{ route('advanced.rel1') }}',
                    type: 'GET',
                    success: function(data) {
                        console.log(data);
                        var rows = '';
                        if (data.length > 0) {
                            $.each(data, function(index, item) {
                                rows += '<tr>' +
                                    '<td>' + item.emp_no + '</td>' +
                                    '<td>' + item.dept_no + '</td>' +
                                    '<td>' + item.from_date + '</td>' +
                                    '<td>' + item.to_date + '</td>' +
                                    '</tr>';
                            });
                        } else {
                            rows = '<tr><td colspan="4">Tiada data ditemui.</td></tr>';
                        }
                        $('#relationsTable tbody').html(rows);
                    },
                    error: function() {
                        $('#relationsTable tbody').html(
                            '<tr><td colspan="4">Ralat memuat data.</td></tr>');
                    }
                });
            });
        });
    </script>
@endsection

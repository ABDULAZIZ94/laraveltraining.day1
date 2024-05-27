@extends('layouts.app')

@section('content')
    <div>
        <a href="{{ route('advanced.index') }}" class="btn btn-primary">Indeks</a>
        <a href="{{ route('advanced.relations') }}" class="btn btn-primary">Hubungan</a>
        <a href="{{ route('advanced.requestparameter') }}" class="btn btn-primary">Parameter Pilihan</a>
        <a href="{{ route('advanced.middleware') }}" class="btn btn-primary">Middleware</a>
        <a href="{{ route('advanced.ajax') }}" class="btn btn-primary">AJAX</a>
        <a href="{{ route('advanced.datatable') }}" class="btn btn-primary">Data Table</a>
    </div>

    <!-- Bahagian baru untuk input umur -->
    <div>
        <form action="{{ route('advanced.umur') }}" method="POST">
            @csrf
            <label for="ageInput">Masukkan Umur:</label>
            <input type="number" id="ageInput" name="age" min="1" max="100" required>
            <button type="submit">Hantar</button>
        </form>
    </div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Profil Pekerja</h1>
        @if ($employee)
            <div class="card">
                <div class="card-body">
                    <p>Nama: {{ $employee->first_name }} {{ $employee->last_name }}</p>
                    <p>Tarikh Lahir: {{ $employee->birth_date->toFormattedDateString() }}</p>
                    <p>Jantina: {{ $employee->gender }}</p>
                    <p>Tarikh Mula Bekerja: {{ $employee->hire_date->toFormattedDateString() }}</p>
                </div>
            </div>
        @else
            <p class="mt-5 text-center">Pekerja tidak ditemukan.</p>
        @endif
    </div>
@endsection

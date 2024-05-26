@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kemaskini Maklumat Pekerja</h1>
    <form method="POST" action="{{ route('employees.update', ['id' => $employee->id]) }}">
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Emel:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
        </div>

        <div class="form-group">
            <label for="position">Jawatan:</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ $employee->position }}" required>
        </div>

        <div class="form-group">
            <label for="salary">Gaji:</label>
            <input type="number" class="form-control" id="salary" name="salary" value="{{ $employee->salary }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Kemaskini</button>
    </form>
</div>
@endsection


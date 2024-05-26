@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Kemaskini Maklumat Pekerja</h1>
        <form method="POST" action="{{ route('employees.update', ['emp_no' => $employee->emp_no]) }}">
            @csrf
            <div class="form-group">
                <label for="name">Employee No:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->emp_no }}"
                    required>
            </div>

            <div class="form-group">
                <label for="birth_date">Birth Date:</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $employee->birth_date }}"
                    required>
            </div>

            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name"
                    value="{{ $employee->first_name }}" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $employee->last_name }}"
                    required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="M" {{ $employee->gender == 'M' ? 'selected' : '' }}>Lelaki</option>
                    <option value="F" {{ $employee->gender == 'F' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="hire_date">Hire Date:</label>
                <input type="date" class="form-control" id="hire_date" name="hire_date" value="{{ $employee->hire_date }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Kemaskini</button>
        </form>
    </div>
@endsection

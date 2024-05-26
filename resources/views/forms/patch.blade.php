@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kemaskini Maklumat Pekerja</h1>
    <form method="POST" action="{{ route('spoof.patch', $department->dept_no) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="department_no">Department No:</label>
            <input type="text" class="form-control" id="dept_no" name="dept_no" value="{{ $department->dept_no }}" required>
        </div>

        <div class="form-group">
            <label for="department_name">Department Name:</label>
            <input type="text" class="form-control" id="dept_name" name="dept_name" value="{{ $department->dept_name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Kemaskini</button>
    </form>
</div>
@endsection


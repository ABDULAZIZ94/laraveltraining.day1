@extends('layouts.app')

@section('content')
    <!-- Bar navigasi mudah alih di atas -->
    <div class="container py-3">
        <a href="/login" class="btn btn-primary ">Login</a>
        <a href="{{route('employees.index')}}" class="btn btn-secondary">Employee</a>
        <a href="{{route('forms.index')}}" class="btn btn-success">Forms</a>
        <a href="{{route('internal.index')}}" class="btn btn-danger">Internal</a>
        <a href="{{route('internal.bypass')}}" class="btn btn-warning">Bypass</a>
        <a href="{{route('advanced.index')}}" class="btn btn-info">Advanced</a>
    </div>
@endsection

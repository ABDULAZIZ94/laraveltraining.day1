@extends('layouts.app')

@section('content')
    <!-- Bar navigasi mudah alih di atas -->
    <div class="container py-3">
        <a href="/login" class="btn btn-primary">Login</a>
        <a href="/employee" class="btn btn-secondary">Employee</a>
        <a href="{{route('forms.index')}}" class="btn btn-success">Forms</a>
        <a href="#" class="btn btn-danger">None</a>
        <a href="#" class="btn btn-warning">None</a>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="#" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('getForm').submit();">GET</a>
            <form id="getForm" action="{{ route('forms.index') }}" method="GET" style="display: none;"></form>

            <a href="#" class="btn btn-success" onclick="event.preventDefault(); document.getElementById('postForm').submit();">POST</a>
            <form id="postForm" action="{{ route('forms.index') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a href="#" class="btn btn-info" onclick="event.preventDefault(); document.getElementById('putForm').submit();">PUT</a>
            <form id="putForm" action="{{ route('forms.index') }}" method="POST" style="display: none;">
                @csrf
                @method('PUT')
            </form>

            <a href="#" class="btn btn-warning" onclick="event.preventDefault(); document.getElementById('patchForm').submit();">PATCH</a>
            <form id="patchForm" action="{{ route('forms.index') }}" method="POST" style="display: none;">
                @csrf
                @method('PATCH')
            </form>

            <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('deleteForm').submit();">DELETE</a>
            <form id="deleteForm" action="{{ route('forms.index') }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
    </div>
@endsection

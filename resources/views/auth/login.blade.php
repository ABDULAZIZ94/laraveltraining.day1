@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Log Masuk
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mel</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Laluan</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Log Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



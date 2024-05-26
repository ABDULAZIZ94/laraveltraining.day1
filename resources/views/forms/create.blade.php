@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Tambah Department Baru
                    </div>
                    <div class="card-body">
                        <form action="{{ route('spoof.create') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="dept_no">No. Department:</label>
                                <input type="text" class="form-control" id="dept_no" name="dept_no" required>
                                <div class="invalid-feedback">Sila masukkan no department.</div>
                            </div>

                            <div class="form-group">
                                <label for="dept_name">Nama Department:</label>
                                <input type="text" class="form-control" id="dept_name" name="dept_name" required>
                                <div class="invalid-feedback">Sila masukkan nama department.</div>
                            </div>

                            <button type="submit" class="btn btn-primary ">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


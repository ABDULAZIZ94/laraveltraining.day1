@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Tambah Pekerja Baru
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="emp_no">Nombor Pekerja:</label>
                                <input type="text" class="form-control" id="emp_no" name="emp_no" required>
                                <div class="invalid-feedback">Sila masukkan nombor pekerja.</div>
                            </div>

                            <div class="form-group">
                                <label for="first_name">Nama:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required maxlength="14">
                                <div class="invalid-feedback">Sila masukkan nama.</div>
                            </div>

                            <div class="form-group">
                                <label for="last_name">Nama Akhir:</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required maxlength="16">
                                <div class="invalid-feedback">Sila masukkan nama akhir.</div>
                            </div>

                            <div class="form-group">
                                <label for="gender">Jantina:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="male" name="gender" value="M" required>
                                        <label class="form-check-label" for="male">Lelaki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="female" name="gender" value="F" required>
                                        <label class="form-check-label" for="female">Perempuan</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hire_date">Tarikh Pengambilan:</label>
                                <input type="date" class="form-control datepicker" id="hire_date" name="hire_date" required>
                                <div class="invalid-feedback">Sila masukkan tarikh pengambilan.</div>
                            </div>

                            <div class="form-group">
                                <label for="birth_date">Tarikh Lahir:</label>
                                <input type="date" class="form-control datepicker" id="birth_date" name="birth_date" required>
                                <div class="invalid-feedback">Sila masukkan tarikh lahir.</div>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



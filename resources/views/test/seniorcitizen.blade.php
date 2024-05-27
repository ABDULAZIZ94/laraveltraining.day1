@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div style="background-color: #d4edda; color: #9f1e74; padding: 10px; margin-bottom: 20px;">
            {{ session('message') }}
        </div>
    @endif
    @if (session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 20px;">
            {{ session('error') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Selamat Datang Warga Emas</div>
                    <div class="card-body">
                        <p>Ini adalah halaman khusus untuk warga emas. Kami menghargai pengalaman dan kebijaksanaan yang
                            Anda bawa.</p>
                        <p>Semoga hari Anda penuh dengan kebahagiaan dan kesehatan yang baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

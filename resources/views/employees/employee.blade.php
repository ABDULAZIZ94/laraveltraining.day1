<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pekerja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Profil Pekerja</h1>
        @if($employee)
            <div class="card">
                <div class="card-body">
                    <p>Nama: {{ $employee->first_name }} {{ $employee->last_name }}</p>
                    <p>Tarikh Lahir: {{ $employee->birth_date->toFormattedDateString() }}</p>
                    <p>Jantina: {{ $employee->gender }}</p>
                    <p>Tarikh Mula Bekerja: {{ $employee->hire_date->toFormattedDateString() }}</p>
                </div>
            </div>
        @else
            <p class="mt-5 text-center">Pekerja tidak ditemukan.</p>
        @endif
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pekerja</title>
</head>
<body>
    <h1>Profil Pekerja</h1>
    @if($employee)
        <p>Nama: {{ $employee->first_name }} {{ $employee->last_name }}</p>
        <p>Email: {{ $employee->email }}</p>
        <p>Jabatan: {{ $employee->position }}</p>
        <p>Tarikh Lahir: {{ $employee->birth_date->toFormattedDateString() }}</p>
        <p>Jantina: {{ $employee->gender }}</p>
        <p>Tarikh Mula Bekerja: {{ $employee->hire_date->toFormattedDateString() }}</p>
    @else
        <p>Pekerja tidak ditemukan.</p>
    @endif
</body>
</html>


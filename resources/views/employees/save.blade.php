<form action="{{ route('employee.store') }}" method="POST">
    @csrf
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="position">Jawatan:</label>
    <input type="text" id="position" name="position" required><br><br>

    <label for="salary">Gaji:</label>
    <input type="number" id="salary" name="salary" required><br><br>

    <button type="submit">Simpan</button>
</form>

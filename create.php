<!-- File: app/Views/peminjaman/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Peminjaman</title>
</head>
<body>
    <h1>Form Tambah Peminjaman</h1>
    <form action="/peminjaman/store" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="jumlah_pinjaman">Jumlah Pinjaman:</label><br>
        <input type="text" id="jumlah_pinjaman" name="jumlah_pinjaman" required><br><br>
        <label for="tanggal_pinjam">Tanggal Pinjam:</label><br>
        <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

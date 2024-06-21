<!-- File: app/Views/peminjaman/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>
</head>
<body>
    <h1>Daftar Peminjaman</h1>
    <a href="/peminjaman/create">Tambah Peminjaman Baru</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jumlah Pinjaman</th>
            <th>Tanggal Pinjam</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($peminjaman as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['jumlah_pinjaman'] ?></td>
            <td><?= $p['tanggal_pinjam'] ?></td>
            <td>
                <a href="/peminjaman/edit/<?= $p['id'] ?>">Edit</a>
                <a href="/peminjaman/delete/<?= $p['id'] ?>" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

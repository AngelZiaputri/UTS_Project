<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Penitipan Hewan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Form Pendaftaran</h1>
    <form action="proses.php" method="post">
        <label for="nama_pemilik">Nama Pemilik:</label>
        <input type="text" name="nama_pemilik" required>

        <label for="jenis_hewan">Jenis Hewan:</label>
        <select name="jenis_hewan" required>
            <option value="Kucing">Kucing</option>
            <option value="Anjing">Anjing</option>
            <option value="Kelinci">Kelinci</option>
        </select>

        <label for="nama_hewan">Nama Hewan:</label>
        <input type="text" name="nama_hewan" required>

        <label for="tanggal_masuk">Tanggal Masuk:</label>
        <input type="date" name="tanggal_masuk" required>

        <label for="tanggal_keluar">Tanggal Keluar:</label>
        <input type="date" name="tanggal_keluar" required>

        <button type="submit">Daftar</button>
    </form>
</div>
</body>
</html>

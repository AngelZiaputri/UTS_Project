<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pemilik = $_POST['nama_pemilik'];
    $jenis_hewan = $_POST['jenis_hewan'];
    $nama_hewan = $_POST['nama_hewan'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $tanggal_keluar = $_POST['tanggal_keluar'];

    // Validasi sederhana (pastikan tidak ada data yang kosong)
    if (empty($nama_pemilik) || empty($jenis_hewan) || empty($nama_hewan) || empty($tanggal_masuk) || empty($tanggal_keluar)) {
        echo "<p style='color:red;'>Semua kolom wajib diisi.</p>";
    } else {
        // Menggunakan prepared statement untuk mencegah SQL injection
        $stmt = $conn->prepare("INSERT INTO pendaftar (nama_pemilik, jenis_hewan, nama_hewan, tanggal_masuk, tanggal_keluar) 
                                VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nama_pemilik, $jenis_hewan, $nama_hewan, $tanggal_masuk, $tanggal_keluar);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>✅ Data berhasil disimpan!</div>";
        } else {
            echo "<div class='alert alert-error'>❌ Gagal menyimpan data: " . $stmt->error . "</div>";
        }

        $stmt->close();
    }
}

// Menutup koneksi database
$conn->close();
?>

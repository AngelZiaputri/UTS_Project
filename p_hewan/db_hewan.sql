CREATE DATABASE penitipan_hewan;

USE penitipan_hewan;

CREATE TABLE pendaftar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pemilik VARCHAR(100),
    jenis_hewan VARCHAR(50),
    nama_hewan VARCHAR(100),
    tanggal_masuk DATE,
    tanggal_keluar DATE
);

<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $angkatan = $_POST["angkatan"];
    $divisi = $_POST["divisi"];

    $sql = "UPDATE tb_peserta_tournament SET nama=?, angkatan=?, divisi=? WHERE nim=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("ssss", $nama, $angkatan, $divisi, $nim);

    if ($stmt->execute()) {
        header("Location: index2.php"); // Ganti 'index.php' dengan halaman utama Anda
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

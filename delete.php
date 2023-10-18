<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete data berdasarkan id_buku dari tabel tb_buku
    $query = "DELETE FROM tb_gaji WHERE id = '$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: munculxx.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>

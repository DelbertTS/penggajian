<?php 
// ganteng.php

include 'koneksi.php';

if (
    isset($_POST['nip']) && isset($_POST['nama']) && isset($_POST['blnthn']) && isset($_POST['status']) && isset($_POST['jabatan'])
) {
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $blnthn = $_POST["blnthn"];
    $status = $_POST["status"];
    $jabatan = $_POST["jabatan"];
    
    // Hitung gaji pokok berdasarkan jabatan
    if ($jabatan === 'direktur') {
        $gaji_pokok = 10000000; // Rp. 10.000.000
    } 
    elseif ($jabatan === 'manajer') {
        $gaji_pokok = 8000000; // Rp. 8.000.000
    } 
    elseif ($jabatan === 'keuangan') {
        $gaji_pokok = 7000000; // Rp. 7.000.000
    } 
    elseif ($jabatan === 'sekretaris') {
        $gaji_pokok = 5000000; // Rp. 5.000.000
    }
    else {
        $gaji_pokok = 0; // Default jika jabatan tidak ditemukan
    }
    
    // Hitung tunjangan berdasarkan status
    if ($status === "menikah") {
        $tunjangan = 0.1 * $gaji_pokok;
    } elseif ($status === "belum_menikah") {
        $tunjangan = 0.05 * $gaji_pokok;
    } else {
        $tunjangan = 0; // Default jika status tidak ditemukan
    }
    
    // Hitung gaji bersih
    $gaji_bersih = $gaji_pokok + $tunjangan;
    
    $query = "INSERT INTO tb_gaji (nip, nama, blnthn, status, jabatan, gaji_pokok, tunjangan, gaji_bersih) VALUES ('$nip', '$nama', '$blnthn', '$status', '$jabatan', '$gaji_pokok', '$tunjangan', '$gaji_bersih')";

    if (mysqli_query($koneksi, $query)) {
        header("location: munculxx.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

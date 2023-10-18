<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$blnthn = $_POST['blnthn'];
$status = $_POST['status'];
$jabatan = $_POST['jabatan'];

$query = "UPDATE tb_gaji SET nip = '$nip', nama = '$nama', blnthn = '$blnthn', status = '$status' WHERE id ='$id'";
mysqli_query($koneksi, $query);

header("location: munculxx.php");
exit;
?>

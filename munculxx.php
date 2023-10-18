<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bs/bootstrap.min.css">
    <style>
      .ilanglahunderline{
        text-decoration: none;
      }
    </style>
</head>
<body>
<?php
// Connect to the database
include 'koneksi.php';
$sql = "SELECT * FROM tb_gaji";
$result = mysqli_query($koneksi, $sql);
  
// Display the results in a table
if (mysqli_num_rows($result) > 0) {
  ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <!-- <th>Nip</th> -->
          <th>Nama</th>   
          <th>Aksi</th>
          <!-- <th>Bulan dan Tahun</th>
          <th>Status</th>
          <th>Jabatan</th>
          <th>Gaji_pokok</th>
          <th>Tunjangan</th>
          <th>Gaji_bersih</th> -->
        </tr>
      </thead>
      <tbody>
      <?php $no=1; while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>   
          
          <td class="ilanglahunderline">
            <a href="edit.php?id=<?php echo $row['id']; ?>" class="ilanglahunderline">Edit</a> |
            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="ilanglahunderline">Hapus</a> |
            <a href="ditel.php?id=<?php echo $row['id'];?>" class="ilanglahunderline">Detail</a>
          </td>
        </tr>
      <?php $no++; } ?>    
      </tbody>
    </table>
    <?php
  }
  
  // Close the database connection
  mysqli_close($koneksi);
  ?>
  <h2><a href="./index.php" class="ilanglahunderline">Kembali</a></h2>
  <h3><a href="./pencarian.php" class="ilanglahunderline">SEARCH</a></h3>
  <!-- // Close the database connection
  mysqli_close($koneksi);
  ?> -->
        <!-- <form action="" method="post">
   <input type="text" name="keyword">
   <button type="submit">Cari</button> 
</form> -->
<!--
<> php
if(isset($_POST['keyword'])) {
   $keyword = $_POST['keyword']; 
   $query = "SELECT * FROM tbbuku WHERE nama LIKE '%$keyword%'";
   $data = mysqli_query($koneksi, $query);
   while($d = mysqli_fetch_array($data)) {
      // tampilkan data 
   }
} 
?>
-->

</body>
</html>
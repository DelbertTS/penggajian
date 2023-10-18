<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'koneksi.php';
    $id = $_GET["id"];
    $stmt = $koneksi->prepare("SELECT * FROM tb_gaji WHERE id = ?");
    if (!$stmt) {
        die("Error in preparing statement: " . $koneksi->error);
    }

    $stmt->bind_param("i", $id);
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }

    $result = $stmt->get_result();
    while ($table = $result->fetch_assoc()) {
    ?>
    <div>
        <h4>Nip : <?php echo $table['nip']; ?></h4>
        <h4>Nama : <?php echo $table['nama']; ?></h4>
        <h4>Bulan dan tahun : <?php echo $table['blnthn']; ?></h4>
        <h4>Status : <?php echo $table['status']; ?></h4>
        <h4>Jabatan : <?php echo $table['jabatan']; ?></h4>

        <a href="munculxx.php">Kembali</a>
    </div>
    <?php
    }

    $stmt->close();
    ?>
</body>
</html>

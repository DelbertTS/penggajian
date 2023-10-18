<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bs/bootstrap.min.css">
</head>
<body>
    

<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $field = $_POST['field'];
    $keyword = $_POST['keyword'];

    echo "Pencarian Data Berdasarkan : <font color='black'><b>$field</b></font> <br> 
    Kata Yang Dicari : <font color='#121212'>$keyword</font><br><br>";

    // Using prepared statements to prevent SQL injection
    $sql = "SELECT * FROM tb_gaji WHERE $field LIKE ?";
    $stmt = $koneksi->prepare($sql);
    if (!$stmt) {
        die("Error in preparing statement: " . $koneksi->error);
    }

    $searchKeyword = "%$keyword%";
    $stmt->bind_param("s", $searchKeyword);
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }

    $result = $stmt->get_result();
    $jumlah = $result->num_rows;

    while ($row = $result->fetch_assoc()) {
        echo "<a href='lihat.php?id={$row['id']}' style='text-decoration: none;'>{$row[$field]}</a><br>";
    }

    $stmt->close();
}
?>
</body>
</html>
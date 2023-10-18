<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail User</title>
    <link rel="stylesheet" href="./bs/bootstrap.min.css">
    <style>
        .ilanglahunderline {
            text-decoration: none;
        }
        div.hidden-div{
            display: none;
        }
    </style>
</head>
<body>
    <?php
    // Connect to the database
    include 'koneksi.php';

    // Check if 'id' parameter is provided
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // Query to fetch user details
        $sql = "SELECT * FROM tb_gaji WHERE id = $id";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                // Display user details
                ?>
                <h1>Detail User</h1>
                <table class="table table-bordered">
                    <div class="hidden-div">
                        <tr>
                            <th>ID</th>
                            <td><?php echo $row['id']; ?></td>
                        </tr>
                    </div>
                    <tr>
                        <th>Nip</th>
                        <td><?php echo $row['nip']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td><?php echo $row['nama']; ?></td>
                    </tr>
                    <tr>
                        <th>Bulan dan Tahun</th>
                        <td><?php echo $row['blnthn']; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?php echo $row['status']; ?></td>
                    </tr>
                    <tr>
                        <th>jabatan</th>
                        <td><?php echo $row['jabatan']; ?></td>
                    </tr>
                    <tr>
                        <th>gaji_pokok</th>
                        <td><?php echo $row['gaji_pokok']; ?></td>
                    </tr>
                    <tr>
                        <th>tunjangan</th>
                        <td><?php echo $row['tunjangan']; ?></td>
                    </tr>
                    <tr>
                        <th>gaji bersih</th>
                             <td><?php echo $row['gaji_bersih']?></td>
                        </th>
                    </tr>
                </table>
                <p><a href="./munculxx.php" class="ilanglahunderline">Kembali</a></p>
                <?php
            } else {
                echo "<p>User not found.</p>";
            }
        } else {
            echo "<p>Error retrieving data.</p>";
        }

        // Close the database connection
        mysqli_close($koneksi);
    } else {
        echo "<p>Invalid request.</p>";
    }
    ?>
</body>
</html>

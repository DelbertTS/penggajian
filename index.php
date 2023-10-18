<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="./bs/bootstrap.min.css">
            <style>
                *{
                    margin: 0 auto;
                    padding: 0;
                }
                hr{
                    border-width: 0.6vw;
                }
                body{
                    background-color: rgba(41,41,41,255);
                    color: white;
                }
                .ilanglahunderline{
                    text-decoration: none;
                }
            </style>
        </head>
        <body>
            <h1 class="d-flex justify-content-center">Tambah data karyawan</h1>
            <hr>
        <form action="ganteng.php" method="POST">
            <label for="nip">Isi nip anda</label>
            <input type="text" name="nip" id="nama">
            <br>
            <label for="nama">Isi nama anda</label>
            <input type="text" name="nama" id="nip"></input>
            <br>
            <label for="nama">Bulan dan tahun</label>
            <input type="text" name="blnthn" id="blnthn"></input>
            <br>
            <label for="nama">Status :</label> <br>
            <input type="radio" name="status" value="menikah" id="menikah"><label for="menikah">Menikah</label><br>
            <input type="radio" name="status" value="belum_menikah" id="belum_menikah"><label for="belum_menikah">Belum menikah</label>
            <br>
            <label for="jabatan">Jabatan :</label>
            <select name="jabatan" id="jabatan">
                <option value="direktur">Direktur</option>
                <option value="manajer">Manager</option>
                <option value="keuangan">Keuangan</option>
                <option value="sekretaris">Sekretaris</option>
            </select>
            <br>
            <button type="submit" id="tombol" class="mx-1">KIRIM</button>
        </form>
            <hr class="turun">
                <h3><a href="./munculxx.php" class="ilanglahunderline">KE 2</a></h3>
        </body>
    </html>
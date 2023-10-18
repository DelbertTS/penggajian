<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bs/bootstrap.min.css">
</head>
<body>
    

<form action="tampil.php" method="POST" class="my-3">
    <table width="100%" border="0">
        <tr>
            <td width="101" rowspan="3"><div align="right"></div>                        
            <div align="right"></div> <label></label></td>
            <td width="160" height="21">Pilih Data Berdasarkan</td>
            <td width="14"><div align="center">:</div></td>
            <td width="176"><font color="#0000FF" face="Arial Narrow">
                <select name="field">
                    <option value="kosong">---select---</option>
                    <option value="nip">Nip</option>
                    <option value="nama">Nama</option>
                    <option value="blnthn">Bulan dan tahun</option>
                    <option value="status">Status</option>
                    <option value="jabatan">Jabatan</option>
                </select>
            </font></td>
        </tr>
        <tr>
            <td >Masukkan Kata Yang Cari</td>
            <td><div align="center">:</div></td>
            <td><font color="#0000FF"  face="Arial Narrow">
                <input type="text" name="keyword">
            </font></td>
        </tr>
        <tr>
            <td height="26" colspan="4">
                <input type="submit" name="Submit" value="Cari">
                <input type="reset" name="Submit2" value="Reset">
            </td>
        </tr>
    </table>
</form>
<br>
<div class="container d-flex justify-content-center">
   <button class="btn btn-danger"> <h3><a href="./munculxx.php" style="text-decoration: none; color: white;">Kembali</a></h3></button>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<?php
$nama = "vida";
$kelas = "12.2A.12";
$nim = "12201093";
$ttl = "jakarta,30 maret 2002";
$agama = "islam";
$universitas = "UBSI Ciledug";
$prodi = "sistem informasi";

?>
<body>
    <table border="1">
    <tr>
    <td>nama</td>
    <td><?php echo"$nama"?></td>
    </tr>

    <tr>
    <td>kelas</td>
    <td><?php echo"$kelas"?></td>
    </tr>

    <tr>
    <td>NIM</td>
    <td><?php echo"$nim"?></td>
    </tr>

    <tr>
    <td>tempat, tanggal lahir</td>
    <td><?php echo"$ttl"?></td>
    </tr>

    <tr>
    <td>agama</td>
    <td><?php echo"$agama"?></td>
    </tr>

    <tr>
    <td>universitas</td>
    <td><?php echo"$universitas"?></td>
    </tr>

    <tr>
    <td>prodi</td>
    <td><?php echo"$prodi"?></td>
    </tr>

    </table>
</body>
</html>
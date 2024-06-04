<html>
<head>
<title>Tampil Data ?Siswa</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
 Tampil Data Siswa
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 
 <tr>
 <td>Nama</td>
 <td>:</td>
 <td>
 <?= $nama; ?>
 </td>
 </tr>
 
 <tr>
 <td>Nim</td>
 <th>:</th>
 <td>
 <?= $nim; ?>
 </td>
 </tr>
 
 <tr>
 <td>Kelas</td>
 <th>:</th>
 <td>
 <?= $kelas; ?>
 </td>
 </tr>
 

 <tr>
 <td>Tanggal Lahir</td>
 <td>:</td>
 <td>
 <?= $tgll; ?>
 </td>
 </tr>

 <tr>
 <td>Tempat Lahir</td>
 <td>:</td>
 <td>
 <?= $tempatl; ?>
 </td>
 </tr>

 
 <tr>
 <td>Jenis Kelamin</td>
 <td>:</td>
 <td>
 <?= $kelamin; ?>
 </td>
 </tr>

 <tr>
 <td>Alamat</td>
 <td>:</td>
 <td>
 <?= $alamat; ?>
 </td>
 </tr>

 <tr>
 <td>Agama</td>
 <td>:</td>
 <td>
 <?= $agama; ?>
 </td>
 </tr>

 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('Siswa');
?>">Kembali</a>
 </td>
 </tr>
 </table>
 </center>
</body>
</html>
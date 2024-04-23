<html>
<head>
<title>Tampil Profile</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
 Tampil Profile
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Nim</th>
 <th>:</th>
 <td>
 <?= $nim; ?>
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
 <td>Alamat</td>
 <td>:</td>
 <td>
 <?= $alamat; ?>
 </td>
 </tr>

 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('Profile');
?>">Kembali</a>
 </td>
 </tr>
 </table>
 </center>
</body>
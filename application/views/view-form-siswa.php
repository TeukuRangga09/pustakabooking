
<html>
<head>
 <title>Form Input Data Siswa</title>
</head>
<body>
 <center>
 <form action="<?= base_url('Siswa/cetak'); ?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Siswa
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 
 <tr>
 <th>Nama</th>
 <td>:</td>
 <td>
 <input type="text" name="nama" id="nama" placeholder="Required">
 <div class="col-sm-6 col-danger">
    <?= form_error("nama"); ?>
 </div>
 </td>
 </tr>

<br>

 <tr>
 <th>NIM</th>
 <th>:</th>
 <td>
 <input type="number" name="nim" id="nim" placeholder="Required">
 <div class="col-sm-6 col-danger">
    <?= form_error("nim"); ?>
 </div>
 </td>
 </tr>

<br>

 <tr>
 <th>Kelas</th>
 <th>:</th>
 <td>
 <select name="kelas" id="kelas">
 <option value="">Pilih Kelas</option>
 <option value="Ilkom 4a">Ilkom 4a</option>
 <option value="Ilkom 4b">Ilkom 4b</option>
 <option value="Ilkom 4c">Ilkom 4c</option>
 <option value="Ilkom 4d">Ilkom 4d</option>
 </select>
 </td>
 </tr>

<br>

 <tr>
 <th>Tanggal Lahir</th>
 <td>:</td>
 <td>
 <input type="date" name="tgll" id="tgll" placeholder="Required">
 <div class="col-sm-6 col-danger">
    <?= form_error("tgll"); ?>
 </div>
 </td>
 </tr>
 
 <br>

 <tr>
 <th>Tempat Lahir</th>
 <td>:</td>
 <td>
 <input type="text" name="tempatl" id="tempatl" placeholder="Required">
 <div class="col-sm-6 col-danger">
    <?= form_error("tempatl"); ?>
 </div>
 </td>
 </tr>

<br>

 <tr>
 <th>Jenis Kelamin</th>
 <td>:</td>
 <td>
 <input type="radio" id="kelamin" name="kelamin" value="Laki-laki">
  <label for="kelamin">Laki-laki</label>
  <input type="radio" id="kelamin" name="kelamin" value="Perempuan">
  <label for="css">Perempuan</label><br>
 </td>
 </tr>

<br>

 <tr>
 <th>Alamat</th>
 <td>:</td>
 <td>
 <input type="text" name="alamat" id="alamat" placeholder="Required">
 <div class="col-sm-6 col-danger">
    <?= form_error("alamat"); ?>
 </div>
 </td>
 </tr>

<br>

 <tr>
 <th>Agama</th>
 <th>:</th>
 <td>
 <select name="agama" id="agama">
 <option value="">Pilih Agama</option>
 <option value="Islam">Islam</option>
 <option value="Kristen Katolik">Kristen Katolik</option>
 <option value="Kristen Protestan">Kristen Protestan</option>
 <option value="Buddha">Budha</option>
 <option value="Hindu">Hindu</option>
 <option value="Khomgucu">Khongucu</option>
 </select>
 </td>
 </tr>

 <!-- <tr>
 <th>SKS</th>
 <td>:</td>
 <td>
 <select name="sks" id="sks">
 <option value="">Pilih SKS</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
 </select>
 </td> -->
 <!-- </tr> -->
 <tr>
 <td colspan="3" align="center">
 <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html>

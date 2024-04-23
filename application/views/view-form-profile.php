<html>
<head>
 <title>Form Input Profile</title>
</head>
<body>
 <center>
 <form action="<?= base_url('Profile/cetak'); ?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Profile
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
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
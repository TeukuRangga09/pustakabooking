<html>
<head>
    <title>Hasil Transaksi</title>
</head>

<body>
    <h2>Hasil Input Transaksi</h2>
    <p>Nama Pembeli: <?php echo $transaksi->nama_pembeli; ?></p>
    <p>No. HP: <?php echo $transaksi->no_hp; ?></p>
    <p>Merk Sepatu: <?php echo $transaksi->merk_sepatu; ?></p>
    <p>Ukuran Sepatu: <?php echo $transaksi->ukuran_sepatu; ?></p>
    <p>Total Harga: Rp. <?php echo $total_harga; ?></p>
    <a href="input_transaksi.php">Kembali ke Form</a>
</body>
</html>

<html>

<head>
    <title>Tampil Data Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Daftar Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Sepatu</td>
                <td>:</td>
                <td>
                    <?= $sepatu; ?>
                </td>
            </tr>
            <tr>
                <td>Ukuran</td>
                <td>:</td>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('sepatu');
                    ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
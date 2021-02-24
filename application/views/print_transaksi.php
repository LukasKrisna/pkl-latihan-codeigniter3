<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>NO</th>
            <th>KODE TRANSAKSI</th>
            <th>KODE DINAS</th>
            <th>KODE BARANG</th>
            <th>HARGA</th>
            <th>TEMPAT PEMBELIAN</th>
            <th>TANGGAL PEMBELIAN</th>
            <th>KETERANGAN</th>
        </tr>
        <?php 
        $no = 1;
        foreach ($transaksi as $tra): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tra->kode_transaksi ?></td>
            <td><?php echo $tra->kode_dinas;?></td>
            <td><?php echo $tra->kode_barang;?></td>
            <td><?php echo $tra->harga;?></td>
            <td><?php echo $tra->tempat_pembelian;?></td>
            <td><?php echo $tra->tanggal_pembelian;?></td>
            <td><?php echo $tra->keterangan;?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
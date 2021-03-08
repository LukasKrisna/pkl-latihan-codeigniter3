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
            <th>KODE RUANGAN</th>
            <th>KODE ASET</th>
            <th>MERK ASET</th>
            <th>JUMLAH ASET</th>
            <th>TANGGAL PEMBELIAN</th>
            <th>KONDISI ASET</th>
        </tr>
        <?php 
        $no = 1;
        foreach ($transaksi as $tra): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tra->kode_transaksi ?></td>
            <td><?php echo $tra->kode_dinas;?></td>
            <td><?php echo $tra->kode_ruangan;?></td>
            <td><?php echo $tra->kode_aset;?></td>
            <td><?php echo $tra->merk_aset;?></td>
            <td><?php echo $tra->jumlah_aset;?></td>
            <td><?php echo $tra->tgl_pembelian;?></td>
            <td><?php echo $tra->kondisi_aset;?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
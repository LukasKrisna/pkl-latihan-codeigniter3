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
            <th>KODE BARANG</th>
            <th>NAMA BARANG</th>
            <th>FOTO BARANG</th>
            <th>MERK</th>
            <th>NO SERI PABRIK</th>
            <th>UKURAN</th>
            <th>BAHAN</th>
            <th>TAHUN PEMBUATAN</th>
            <th>JUMLAH BARANG</th>
            <th>HARGA BELI</th>
            <th>KEADAAN BARANG</th>
            <th>KETERANGAN</th>
        </tr>
        <?php 
        $no = 1;
        foreach ($barang as $brg): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $brg->kode_barang ?></td>
            <td><?php echo $brg->nama_barang;?></td>
            <td>
                <img src="<?php echo base_url();?>assets/foto_barang/<?php echo $brg->foto_barang; ?>" width="90" height="110">
            </td>
            <td><?php echo $brg->merk;?></td>
            <td><?php echo $brg->no_seri_pabrik;?></td>
            <td><?php echo $brg->ukuran;?></td>
            <td><?php echo $brg->bahan;?></td>
            <td><?php echo $brg->tahun_pembuatan;?></td>
            <td><?php echo $brg->jumlah_barang;?></td>
            <td><?php echo $brg->harga_beli;?></td>
            <td><?php echo $brg->keadaan_barang;?></td>  
            <td><?php echo $brg->keterangan;?></td>  
        </tr>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
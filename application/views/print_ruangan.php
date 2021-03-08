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
            <th>KODE RUANGAN</th>
            <th>KODE DINAS</th>
            <th>NAMA RUANGAN</th>
            <th>FOTO RUANGAN</th>
            <th>CREATED AT</th>
            <th>UPDATED AT</th>
        </tr>
        <?php 
        $no = 1;
        foreach ($ruangan as $rua): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $rua->kode_ruangan ?></td>
            <td><?php echo $rua->kode_dinas;?></td>
            <td><?php echo $rua->nama_ruangan;?></td>
            <td>
                <img src="<?php echo base_url();?>assets/foto_ruangan/<?php echo $rua->foto_ruangan; ?>" width="90" height="110">
            </td>
            <td><?php echo $rua->created_at;?></td>
            <td><?php echo $rua->updated_at;?></td> 
        </tr>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
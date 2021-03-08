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
            <th>KODE ASET</th>
            <th>JENIS ASET</th>
        </tr>
        <?php 
        $no = 1;
        foreach ($aset as $ast): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $ast->kode_aset ?></td>
            <td><?php echo $ast->jenis_aset;?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
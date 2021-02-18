<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>NO</th>
            <th>KODE DINAS</th>
            <th>UNIT ORGANISASI</th>
            <th>SUB UNIT ORGANISASI</th>
            <th>UPB</th>                                                                        </tr>
        <?php 
        $no = 1;
        foreach ($dinas as $dns): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $dns->kode_dinas ?></td>
            <td><?php echo $dns->unit_organisasi;?></td>
            <td><?php echo $dns->sub_unit_organisasi;?></td>
            <td><?php echo $dns->upb;?></td>  
        </tr>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
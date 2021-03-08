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
            <th>NAMA DINAS</th>
            <th>ALAMAT</th>                                                                        
        </tr>
        <?php 
        $no = 1;
        foreach ($dinas as $dns): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $dns->kode_dinas ?></td>
            <td><?php echo $dns->nama_dinas;?></td>
            <td><?php echo $dns->alamat;?></td>  
        </tr>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
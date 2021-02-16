<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Show Data</title>
</head>
<body>
    <table border="2px solid black">
    
        <tr>
            <th>ID BARANG</th>
            <th>NAMA BARANG</th>
            <th>NO SERI</th>
            <th>HARGA</th>
        </tr>
        
        <?php foreach ($barang as $brg): ?>
            <tr>
                <td><?php echo $brg['id_barang']; ?></td>
                <td><?php echo $brg['nama_barang']; ?></td>
                <td><?php echo $brg['no_seri']; ?></td>
                <td><?php echo $brg['harga']; ?></td>
            </tr>
        <?php endforeach; ?>
       
    </table>
</body>
</html>
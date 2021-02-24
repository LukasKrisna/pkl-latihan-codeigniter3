<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA TRANSAKSI</strong></h4>
        <table class="table">
            <tr>
                <th>Kode Transaksi</th>
                <td><?php echo $detail->kode_transaksi ?></td>
            </tr>
            <tr>
                <th>Kode Dinas</th>
                <td><?php echo $detail->kode_dinas ?></td>
            </tr>
            <tr>
                <th>Kode Barang</th>
                <td><?php echo $detail->kode_barang ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td><?php echo $detail->harga ?></td>
            </tr>
            <tr>
                <th>Tempat Pembelian</th>
                <td><?php echo $detail->tempat_pembelian ?></td>
            </tr>
            <tr>
                <th>Tanggal Pemebelian</th>
                <td><?php echo $detail->tanggal_pembelian ?></td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan ?></td>
            </tr>
        </table>
        <a href="<?php echo base_url('transaksi/index');?>" class="btn btn-primary">Kembali</a>
    </section>
</div>
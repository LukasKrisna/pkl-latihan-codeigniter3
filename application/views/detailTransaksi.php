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
                <th>Kode Ruangan</th>
                <td><?php echo $detail->kode_ruangan ?></td>
            </tr>
            <tr>
                <th>Kode Aset</th>
                <td><?php echo $detail->kode_aset ?></td>
            </tr>
            <tr>
                <th>Merk Aset</th>
                <td><?php echo $detail->merk_aset ?></td>
            </tr>
            <tr>
                <th>Jumlah Aset</th>
                <td><?php echo $detail->jumlah_aset ?></td>
            </tr>
            <tr>
                <th>Tanggal Pemebelian</th>
                <td><?php echo $detail->tgl_pembelian ?></td>
            </tr>
            <tr>
                <th>Kondisi Aset</th>
                <td><?php echo $detail->kondisi_aset ?></td>
            </tr>
        </table>
        <a href="<?php echo base_url('transaksi/index');?>" class="btn btn-primary">Kembali</a>
    </section>
</div>
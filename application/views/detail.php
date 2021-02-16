<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA BARANG</strong></h4>
        <table class="table">
            <tr>
                <th>Kode Barang</th>
                <td><?php echo $detail->kode_barang ?></td>
            </tr>
            <tr>
                <th>Nama Barang</th>
                <td><?php echo $detail->nama_barang ?></td>
            </tr>
            <tr>
                <th>Foto Barang</th>
                <td>
                    <img src="<?php echo base_url();?>assets/foto_barang/<?php echo $detail->foto_barang; ?>" width="90" height="110">
                </td>
            </tr>
            <tr>
                <th>Merk</th>
                <td><?php echo $detail->merk ?></td>
            </tr>
            <tr>
                <th>No Seri Pabrik</th>
                <td><?php echo $detail->no_seri_pabrik ?></td>
            </tr>
            <tr>
                <th>Ukuran</th>
                <td><?php echo $detail->ukuran ?></td>
            </tr>
            <tr>
                <th>Bahan</th>
                <td><?php echo $detail->bahan ?></td>
            </tr>
            <tr>
                <th>Tahun Pembuatan</th>
                <td><?php echo $detail->tahun_pembuatan ?></td>
            </tr>
            <tr>
                <th>Jumlah Barang</th>
                <td><?php echo $detail->jumlah_barang ?></td>
            </tr>
            <tr>
                <th>Harga Beli</th>
                <td><?php echo $detail->harga_beli ?></td>
            </tr>
            <tr>
                <th>Keadaan Barang</th>
                <td><?php echo $detail->keadaan_barang ?></td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan ?></td>
            </tr>
        </table>
        <a href="<?php echo base_url('barang/index');?>" class="btn btn-primary">Kembali</a>
    </section>
</div>
<div class="content-wrapper">
    <section class="content">
        <?php foreach($transaksi as $tra){ ?>
        <form action="<?php echo base_url().'transaksi/updateData';?>" method="post">
            <div class="form-group">
                <label>Kode Transaksi</label>
                <input type="hidden" name="kode_transaksi" class="form-control" value="<?php echo $tra->kode_transaksi; ?>">
            </div>
            <div class="form-group">
                <label>Kode Dinas</label>
                <input type="text" name="kode_dinas" class="form-control" value="<?php echo $tra->kode_dinas; ?>">
            </div>
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" value="<?php echo $tra->kode_barang; ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $tra->harga; ?>">
            </div>
            <div class="form-group">
                <label>Tempat Pembelian</label>
                <input type="text" name="tempat_pembelian" class="form-control" value="<?php echo $tra->tempat_pembelian; ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Pembelian</label>
                <input type="date" name="tanggal_pembelian" class="form-control" value="<?php echo $tra->tanggal_pembelian; ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $tra->keterangan; ?>">
            </div>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
        <?php } ?>
    </section>
</div>
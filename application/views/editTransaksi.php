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
                <label>Kode Ruangan</label>
                <input type="text" name="kode_ruangan" class="form-control" value="<?php echo $tra->kode_ruangan; ?>">
            </div>
            <div class="form-group">
                <label>Kode Aset</label>
                <input type="text" name="kode_aset" class="form-control" value="<?php echo $tra->kode_aset; ?>">
            </div>
            <div class="form-group">
                <label>Merk Aset</label>
                <input type="text" name="merk_aset" class="form-control" value="<?php echo $tra->merk_aset; ?>">
            </div>
            <div class="form-group">
                <label>Jumlah Aset</label>
                <input type="text" name="jumlah_aset" class="form-control" value="<?php echo $tra->jumlah_aset; ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Pembelian</label>
                <input type="date" name="tgl_pembelian" class="form-control" value="<?php echo $tra->tgl_pembelian; ?>">
            </div>
            <div class="form-group">
                <label>Kondisi Aset</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $tra->kondisi_aset; ?>">
            </div>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
        <?php } ?>
    </section>
</div>
<div class="content-wrapper">
    <section class="content">
        <?php foreach($ruangan as $rua){ ?>
        <form action="<?php echo base_url().'ruangan/updateData';?>" method="post">
            <div class="form-group">
                <label>Kode Ruangan</label>
                <input type="hidden" name="kode_ruangan" class="form-control" value="<?php echo $rua->kode_ruangan; ?>">
            </div>
            <div class="form-group">
                <label>Kode Dinas</label>
                <input type="text" name="kode_dinas" class="form-control" value="<?php echo $rua->kode_dinas; ?>">
            </div>
            <div class="form-group">
                <label>Nama Ruangan</label>
                <input type="text" name="nama_ruangan" class="form-control" value="<?php echo $rua->nama_ruangan; ?>">
            </div>
            <div class="form-group">
                <label>Foto Ruangan</label>
                <input type="text" name="foto_ruangan" class="form-control" value="<?php echo $rua->foto_ruangan; ?>">
            </div>
            <div class="form-group">
                <label>Luas Ruangan</label>
                <input type="text" name="luas_ruangan" class="form-control" value="<?php echo $rua->luas_ruangan; ?>">
            </div>
            <div class="form-group">
                <label>Jumlah Barang</label>
                <input type="text" name="jumlah_barang" class="form-control" value="<?php echo $rua->jumlah_barang; ?>">
            </div>
            <div class="form-group">
                <label>Aset Ruangan</label>
                <input type="text" name="aset_ruangan" class="form-control" value="<?php echo $rua->aset_ruangan; ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $rua->keterangan; ?>">
            </div>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
        <?php } ?>
    </section>
</div>
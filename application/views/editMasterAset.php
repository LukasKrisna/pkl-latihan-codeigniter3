<div class="content-wrapper">
    <section class="content">
        <?php foreach($aset as $ast){ ?>
        <form action="<?php echo base_url().'barang/update';?>" method="post">
            <div class="form-group">
                <label>Kode Aset</label>
                <input type="hidden" name="kode_aset" class="form-control" value="<?php echo $ast->kode_aset; ?>">
            </div>
            <div class="form-group">
                <label>Jenis Aset</label>
                <input type="text" name="jenis_aset" class="form-control" value="<?php echo $ast->jenis_aset; ?>">
            </div>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
        <?php } ?>
    </section>
</div>
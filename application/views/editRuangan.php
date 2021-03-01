<div class="content-wrapper">
    <section class="content">
        <?php 
        if (isset($ruangan)) {
            foreach ($ruangan as $rua ) {?>
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
                <label>Created At</label>
                <input type="date" name="created_at" class="form-control" value="<?php echo $rua->created_at; ?>">
            </div>
            <div class="form-group">
                <label>Updated At</label>
                <input type="date" name="updated_at" class="form-control" value="<?php echo $rua->updated_at; ?>">
            </div>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
        <?php }} ?>
    </section>
</div>
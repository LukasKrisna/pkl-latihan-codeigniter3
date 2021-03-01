<div class="content-wrapper">
    <section class="content">
        <?php foreach($dinas as $dns){ ?>
        <form action="<?php echo base_url().'dinas/updateData';?>" method="post">
            <div class="form-group">
                <label>Kode Dinas</label>
                <input type="hidden" name="kode_dinas" class="form-control" value="<?php echo $dns->kode_dinas; ?>">
            </div>
            <div class="form-group">
                <label>Nama Dinas</label>
                <input type="text" name="nama_dinas" class="form-control" value="<?php echo $dns->nama_dinas; ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $dns->alamat; ?>">
            </div>
            
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
        <?php }?>
    </section>
</div>
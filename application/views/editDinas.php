<div class="content-wrapper">
    <section class="content">
        <?php foreach($dinas as $dns){ ?>
        <form action="<?php echo base_url().'dinas/updateData';?>" method="post">
            <div class="form-group">
                <label>Kode Dinas</label>
                <input type="hidden" name="kode_dinas" class="form-control" value="<?php echo $dns->kode_dinas; ?>">
            </div>
            <div class="form-group">
                <label>Unit Organisasi</label>
                <input type="text" name="unit_organisasi" class="form-control" value="<?php echo $dns->unit_organisasi; ?>">
            </div>
            <div class="form-group">
                <label>Sub Unit Organisasi</label>
                <input type="text" name="sub_unit_organisasi" class="form-control" value="<?php echo $dns->sub_unit_organisasi; ?>">
            </div>
            <div class="form-group">
                <label>UPB</label>
                <input type="text" name="upb" class="form-control" value="<?php echo $dns->upb; ?>">
            </div>
            
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
        <?php }?>
    </section>
</div>
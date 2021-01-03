<div class="content-wrapper">
    <section class="content">
        <?php foreach($barang as $brg){ ?>
        <form action="<?php echo base_url().'barang/update';?>" method="post">
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="hidden" name="kode_barang" class="form-control" value="<?php echo $brg->kode_barang; ?>">
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang; ?>">
            </div>
            <div class="form-group">
                <label>Foto Barang</label>
                <input type="text" name="foto_barang" class="form-control" value="<?php echo $brg->foto_barang; ?>">
            </div>
            <div class="form-group">
                <label>Merk Barang</label>
                <input type="text" name="merk" class="form-control" value="<?php echo $brg->merk; ?>">
            </div>
            <div class="form-group">
                <label>Nomor Seri Pabrik Barang</label>
                <input type="text" name="no_seri_pabrik" class="form-control" value="<?php echo $brg->no_seri_pabrik; ?>">
            </div>
            <div class="form-group">
                <label>Ukuran</label>
                <input type="text" name="ukuran" class="form-control" value="<?php echo $brg->ukuran; ?>">
            </div>
            <div class="form-group">
                <label>Bahan</label>
                <input type="text" name="bahan" class="form-control" value="<?php echo $brg->bahan; ?>">
            </div>
            <div class="form-group">
                <label>Tahun Pembuatan</label>
                <input type="date" name="tahun_pembuatan" class="form-control" value="<?php echo $brg->tahun_pembuatan; ?>">
            </div>
            <div class="form-group">
                <label>Jumlah Barang</label>
                <input type="text" name="jumlah_barang" class="form-control" value="<?php echo $brg->jumlah_barang; ?>">
            </div>
            <div class="form-group">
                <label>Harga Beli</label>
                <input type="text" name="harga_beli" class="form-control" value="<?php echo $brg->harga_beli; ?>">
            </div>
            <div class="form-group">
                <label>Keadaan Barang</label>
                <select class="form-control" name="keadaan_barang" value="<?php echo $brg->keadaan_barang; ?>">
                  <option>Baik Sekali</option>
                  <option>Baik</option>
                  <option>Rusak</option>
                  <option>Rusak Parah</option>
                </select>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan; ?>">
            </div>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
        <?php } ?>
    </section>
</div>
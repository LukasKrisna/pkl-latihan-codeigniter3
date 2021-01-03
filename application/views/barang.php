<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Barang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus">
                Tambah Data Barang
            </i>
        </button>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>KODE BARANG</th>
                <th>NAMA BARANG</th>
                <th>FOTO BARANG</th>
                <th>MERK</th>
                <th>NO SERI PABRIK</th>
                <th>UKURAN</th>
                <th>BAHAN</th>
                <th>TAHUN PEMBUATAN</th>
                <th>JUMLAH BARANG</th>
                <th>HARGA BELI</th>
                <th>KEADAAN BARANG</th>
                <th>KETERANGAN</th>
            </tr>

            <?php 
            $no = 1;
            foreach ($barang as $brg ): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->kode_barang?></td>
                <td><?php echo $brg->nama_barang?></td>
                <td><?php echo $brg->foto_barang?></td>
                <td><?php echo $brg->merk?></td>
                <td><?php echo $brg->no_seri_pabrik?></td>
                <td><?php echo $brg->ukuran?></td>
                <td><?php echo $brg->bahan?></td>
                <td><?php echo $brg->tahun_pembuatan?></td>
                <td><?php echo $brg->jumlah_barang?></td>
                <td><?php echo $brg->harga_beli?></td>
                <td><?php echo $brg->keadaan_barang?></td>
                <td><?php echo $brg->keterangan?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">INPUT DATA BARANG</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"action="<?php echo base_url().'barang/tambahAksi'?>">
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control">
            </div>
            <div class="form-group">
                <label>Foto Barang</label>
                <input type="text" name="foto_barang" class="form-control">
            </div>
            <div class="form-group">
                <label>Merk Barang</label>
                <input type="text" name="merk" class="form-control">
            </div>
            <div class="form-group">
                <label>Nomor Seri Pabrik Barang</label>
                <input type="text" name="no_seri_pabrik" class="form-control">
            </div>
            <div class="form-group">
                <label>Ukuran</label>
                <input type="text" name="ukuran" class="form-control">
            </div>
            <div class="form-group">
                <label>Bahan</label>
                <input type="text" name="bahan" class="form-control">
            </div>
            <div class="form-group">
                <label>Tahun Pembuatan</label>
                <input type="text" name="tahun_pembuatan" class="form-control">
            </div>
            <div class="form-group">
                <label>Jumlah Barang</label>
                <input type="text" name="jumlah_barang" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga Beli</label>
                <input type="text" name="harga_beli" class="form-control">
            </div>
            <div class="form-group">
                <label>Keadaan Barang</label>
                <input type="text" name="keadaan_barang" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>
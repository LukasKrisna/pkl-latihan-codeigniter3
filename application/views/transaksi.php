<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Transaksi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Transaksi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <?php echo $this->session->flashdata('message');?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus">
                Tambah Data Transaksi
            </i>
        </button>
        <a href="<?php echo base_url('barang/print'); ?>" class="btn btn-danger"><i class="fa fa-print">Print</i></a>
        <div class="navbar-form navbar-right">
          <?php echo form_open('barang/search'); ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
          <?php echo form_close(); ?>
        </div>

        <table class="table">
            <tr>
                <th>NO</th>
                <th>KODE TRANSAKSI</th>
                <th>KODE DINAS</th>
                <th>KODE BARANG</th>
                <th>HARGA</th>
                <th>TEMPAT PEMBELIAN</th>
                <th>TANGGAL PEMBELIAN</th>
                <th>KETERANGAN</th>
                <th colspan="2">AKSI</th>
            </tr>

            <?php 
            $no = 1;
            foreach ($transaksi as $tra ): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $tra->kode_transaksi;?></td>
                <td><?php echo $tra->kode_dinas;?></td>
                <td><?php echo $tra->kode_barang;?></td>
                <td><?php echo $tra->harga;?></td>
                <td><?php echo $tra->tempat_pembelian;?></td>
                <td><?php echo $tra->tanggal_pembelian;?></td>
                <td><?php echo $tra->keterangan;?></td>               
                <td><?php echo anchor('barang/detail/'.$tra->kode_transaksi, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('transaksi/hapusData/'.$tra->kode_transaksi, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('transaksi/editData/'.$tra->kode_transaksi, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <?php echo form_open_multipart('transaksi/inputData'); ?>
            <div class="form-group">
                <label>Kode Transaksi</label>
                <input type="text" name="kode_transaksi" class="form-control">
            </div>
            <div class="form-group">
                <label>Kode Dinas</label>
                <input type="text" name="kode_dinas" class="form-control">
            </div>
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Tempat Pembelian</label>
                <input type="text" name="tempat_pembelian" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal Pembelian</label>
                <input type="date" name="tanggal_pembelian" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>
            
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>
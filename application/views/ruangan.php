<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Ruangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Ruangan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <?php echo $this->session->flashdata('message');?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus">
                Tambah Data Ruangan
            </i>
        </button>
        <a href="<?php echo base_url('ruangan/print'); ?>" class="btn btn-danger"><i class="fa fa-print">Print</i></a>
        <div class="navbar-form navbar-right">
          <?php echo form_open('ruangan/search'); ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
          <?php echo form_close(); ?>
        </div>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>KODE RUANGAN</th>
                <th>KODE DINAS</th>
                <th>NAMA RUANGAN</th>
                <th>FOTO RUANGAN</th>
                <!-- <th>LUAS RUANGAN</th> -->
                <!-- <th>JUMLAH BARANG</th> -->
                <th>ASET RUANGAN</th>
                <!-- <th>KETERANGAN</th> -->
                <th colspan="2">AKSI</th>
            </tr>
            <?php 
            $no = 1;
            foreach ($ruangan as $rua ):
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $rua->kode_ruangan; ?></td>
                <td><?php echo $rua->kode_dinas; ?></td>
                <td><?php echo $rua->nama_ruangan; ?></td>
                <td>
                    <img src="<?php echo base_url();?>assets/foto_ruangan/<?php echo $rua->foto_ruangan;?>" width="90" height="110">
                </td>
                <!-- <td><?php echo $rua->luas_ruangan; ?></td> -->
                <!-- <td><?php echo $rua->jumlah_barang; ?></td> -->
                <td><?php echo $rua->aset_ruangan; ?></td>
                <!-- <td><?php echo $rua->keterangan; ?></td> -->
                <td><?php echo anchor('ruangan/detail/'.$rua->kode_ruangan, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('ruangan/hapusData/'.$rua->kode_ruangan, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('ruangan/editData/'.$rua->kode_ruangan, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

    </section>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">INPUT DATA RUANGAN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('ruangan/tambahData'); ?>
            <div class="form-group">
                <label>Kode Ruangan</label>
                <input type="text" name="kode_ruangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Kode Dinas</label>
                <input type="text" name="kode_dinas" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Ruangan</label>
                <input type="text" name="nama_ruangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Foto Ruangan</label>
                <input type="file" name="foto_ruangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Luas Ruangan</label>
                <input type="text" name="luas_ruangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Jumlah Barang</label>
                <input type="text" name="jumlah_barang" class="form-control">
            </div>
            <div class="form-group">
                <label>Aset Ruangan</label>
                <input type="text" name="aset_ruangan" class="form-control">
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
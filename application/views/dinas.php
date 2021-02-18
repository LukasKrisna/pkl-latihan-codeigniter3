<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Dinas</li>
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
                Tambah Data Barang
            </i>
        </button>
        <a href="<?php echo base_url('dinas/print'); ?>" class="btn btn-danger"><i class="fa fa-print">Print</i></a>
        <div class="navbar-form navbar-right">
          <?php echo form_open('dinas/search'); ?>
            <input type="text" name="keywordDinas" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
          <?php echo form_close(); ?>
        </div>
      <table class="table">
        <tr>
          <th>NO</th>
          <th>KODE DINAS</th>
          <th>UNIT ORGANISASI</th>
          <th>SUB UNIT ORGANISASI</th>
          <th>UPB</th>
          <th>AKSI</th>
        
        </tr>
        <?php
        $no = 1;
        foreach ($dinas as $dns): ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $dns->kode_dinas ?></td>
          <td><?php echo $dns->unit_organisasi ?></td>
          <td><?php echo $dns->sub_unit_organisasi ?></td>
          <td><?php echo $dns->upb ?></td>
          <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('dinas/hapusData/'.$dns->kode_dinas, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          <td><?php echo anchor('dinas/editData/'.$dns->kode_dinas, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
        <?php echo form_open_multipart('dinas/tambahAksi'); ?>
            <div class="form-group">
                <label>Kode Dinas</label>
                <input type="text" name="kode_dinas" class="form-control">
            </div>
            <div class="form-group">
                <label>Unit Organisasi</label>
                <input type="text" name="unit_organisasi" class="form-control">
            </div>
            <div class="form-group">
                <label>Sub Unit Organisasi</label>
                <input type="text" name="sub_unit_organisasi" class="form-control">
            </div>
            <div class="form-group">
                <label>UPB</label>
                <input type="text" name="upb" class="form-control">
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
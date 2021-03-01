<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Master Aset</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Aset</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <?php echo $this->session->flashdata('message');?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus">
                Tambah Master Aset
            </i>
        </button>
        <a href="<?php echo base_url('master_aset/print'); ?>" class="btn btn-danger"><i class="fa fa-print">Print</i></a>
        <div class="navbar-form navbar-right">
          <?php echo form_open('master_aset/search'); ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
          <?php echo form_close(); ?>
        </div>

        <table class="table">
            <tr>
                <th>NO</th>
                <th>KODE ASET</th>
                <th>JENIS ASET</th>
                <th colspan="2">AKSI</th>
            </tr>

            <?php 
            $no = 1;
            foreach ($aset as $ast ): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $ast->kode_aset;?></td>
                <td><?php echo $ast->jenis_aset;?></td>
                <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('master_aset/hapus/'.$ast->kode_aset, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('master_aset/edit/'.$ast->kode_aset, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">INPUT MASTER ASET</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('master_aset/tambahAksi'); ?>
            <div class="form-group">
                <label>Kode Aset</label>
                <input type="text" name="kode_aset" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Aset</label>
                <input type="text" name="jenis_aset" class="form-control">
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
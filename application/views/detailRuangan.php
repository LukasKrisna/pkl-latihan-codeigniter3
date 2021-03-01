<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA RUANGAN</strong></h4>
        <table class="table">
            <tr>
                <th>Kode Ruangan</th>
                <td><?php echo $detail->kode_ruangan ?></td>
            </tr>
            <tr>
                <th>Kode Dinas</th>
                <td><?php echo $detail->kode_dinas ?></td>
            </tr>
            <tr>
                <th>Nama Ruangan</th>
                <td><?php echo $detail->nama_ruangan ?></td>
            </tr>
            <tr>
                <th>Foto Ruangan</th>
                <td>
                    <img src="<?php echo base_url();?>assets/foto_ruangan/<?php echo $detail->foto_ruangan; ?>" width="90" height="110">
                </td>
            </tr>
            <tr>
                <th>Created At</th>
                <td><?php echo $detail->created_at ?></td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td><?php echo $detail->updated_at ?></td>
            </tr>
        </table>
        <a href="<?php echo base_url('ruangan/index');?>" class="btn btn-primary">Kembali</a>
    </section>
</div>
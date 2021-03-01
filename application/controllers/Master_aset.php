<?php 
class Master_aset extends CI_Controller
{
    public function index()
    {
    $data['aset'] = $this->M_Master_aset->tampilData()->result();

    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_aset', $data);
		$this->load->view('templates/footer');
    }
    public function tambahAksi()
    {
        $kode_aset      = $this->input->post('kode_aset');
        $jenis_aset     = $this->input->post('jenis_aset');

        $data = array(
          'kode_aset'         => $kode_aset,
          'jenis_aset'        => $jenis_aset
        );

        $this->M_Master_aset->input_data($data, 'master_aset');
        $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          Data Berhasil Ditambahkan!
        </div>');

        redirect('master_aset/index');
    }
    public function hapus($kode_aset)
    {
      $where = array(
        'kode_aset' => $kode_aset  
      );
      $this->M_Master_aset->hapus_data($where, 'master_aset');
      $this->session->set_flashdata('message', '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          Data Berhasil Dihapus!
        </div>');

      redirect('master_aset/index'); 
    }
    public function edit($kode_aset)
    {
      $where = array(
        'kode_aset' => $kode_aset 
      );
      $data['aset'] = $this->M_Master_aset->edit_data($where, 'master_aset')->result();

    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('editMasterAset', $data);
		$this->load->view('templates/footer');
    }
    public function update()
    {
      $kode_aset      = $this->input->post('kode_aset');
      $jenis_aset     = $this->input->post('jenis_aset');

      $data = array(
        'kode_aset'     => $kode_aset, 
        'jenis_aset'    => $jenis_aset
         
      
      );
      $where = array('kode_aset' => $kode_aset, );
      $this->M_Master_aset->update_data($where, $data, 'master_aset');
      $this->session->set_flashdata('message', '
        <div class="alert alert-primary alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          Data Berhasil Diupdate!
        </div>');

      redirect('master_aset/index');
    }
    public function print()
    {
      $data['aset'] = $this->M_Master_aset->tampilData('master_aset')->result();
      $this->load->view('print_barang', $data);
    }
    public function search()
    {
      $keyword = $this->input->post('keyword');
      $data['aset'] = $this->M_Master_aset->get_keyword($keyword);

    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_aset', $data);
		$this->load->view('templates/footer');
    }
}
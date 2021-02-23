<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller 
{
    public function index()
    {
        $data['ruangan'] = $this->m_ruangan->tampilData()->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('ruangan', $data);
		$this->load->view('templates/footer');
    }
    public function tambahData()
    {
        $kode_ruangan           = $this->input->post('kode_ruangan');
        $kode_dinas             = $this->input->post('kode_dinas');
        $nama_ruangan           = $this->input->post('nama_ruangan');
        $foto_ruangan           = $_FILES['foto_ruangan'];
        $luas_ruangan           = $this->input->post('luas_ruangan');
        $jumlah_barang          = $this->input->post('jumlah_barang');
        $aset_ruangan           = $this->input->post('aset_ruangan');
        $keterangan             = $this->input->post('keterangan');

        if ($foto_ruangan='') {
            
        }
        else {
            $config['upload_path']      = './assets/foto_ruangan';
            $config['allowed_types']    = 'jpg|png|gif';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_ruangan')) {
                echo "Upload Gagal";
                die();
            }
            else {
                $foto_ruangan = $this->upload->data('file_name');
            }
        }
        
        $data = array(
            'kode_ruangan'  => $kode_ruangan,
            'kode_dinas'    => $kode_dinas,
            'nama_ruangan'  => $nama_ruangan,
            'foto_ruangan'  => $foto_ruangan,
            'luas_ruangan'  => $luas_ruangan,
            'jumlah_barang' => $jumlah_barang,
            'aset_ruangan'  => $aset_ruangan,
            'keterangan'    => $keterangan
        );
        $this->m_ruangan->inputData($data, 'ruangan');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>Data Berhasil Ditambahkan!</div>');

        redirect('ruangan/index');
    }
    public function hapusData($kode_ruangan)
    {
        $where = array('kode_ruangan' => $kode_ruangan);
        
        $this->m_ruangan->hapusData($where, 'ruangan');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        Data Berhasil Dihapus!
        </div>');
        
        redirect('ruangan/index');
    }
    public function editData($kode_ruangan)
    {
        $where = array('kode_ruangan' => $kode_ruangan);
        $data['ruangan'] = $this->m_ruangan->editData($where, 'ruangan')->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('editRuangan', $data);
		$this->load->view('templates/footer');
    }
    public function updateData()
    {
        $kode_ruangan      = $this->input->post('kode_ruangan');
        $kode_dinas        = $this->input->post('kode_dinas');
        $nama_ruangan      = $this->input->post('nama_ruangan');
        $foto_ruangan      = $this->input->post('foto_ruangan');
        $luas_ruangan      = $this->input->post('luas_ruangan');
        $jumlah_barang     = $this->input->post('jumlah_barang');
        $aset_ruangan      = $this->input->post('aset_ruangan');
        $keterangan        = $this->input->post('keterangan');

        $data = array(
            'kode_ruangan'  => $kode_ruangan,
            'kode_dinas'    => $kode_dinas,
            'nama_ruangan'  => $nama_ruangan,
            'foto_ruangan'  => $foto_ruangan,
            'luas_ruangan'  => $luas_ruangan,
            'jumlah_barang' => $jumlah_barang,
            'aset_ruangan'  => $aset_ruangan,
            'keterangan'    => $keterangan
        );
        $where = array('kode_ruangan' => $kode_ruangan);
        $this->m_ruangan->updateData($where, $data, 'ruangan');
        $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        Data Berhasil Diupdate!
        </div>');

        redirect('ruangan/index');
    }
    public function detail($kode_ruangan)
    {
        $this->load->model('m_ruangan');
        $detail = $this->m_ruangan->detailData($kode_ruangan);
        $data['detail'] = $detail;

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detailRuangan', $data);
		$this->load->view('templates/footer');
    }
}

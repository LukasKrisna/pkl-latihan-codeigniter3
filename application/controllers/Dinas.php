<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinas extends CI_Controller
{
    public function index()
    {
        $data['dinas'] = $this->m_dinas->tampilData()->result();

        $this->load->view('templates/header');
		    $this->load->view('templates/sidebar');
		    $this->load->view('dinas', $data);
		    $this->load->view('templates/footer');
    }
    public function tambahAksi()
    {
        $kode_dinas   = $this->input->post('kode_dinas');
        $nama_dinas   = $this->input->post('nama_dinas');
        $alamat       = $this->input->post('alamat');
        
        $data = array(
            'kode_dinas'    => $kode_dinas,
            'nama_dinas'    => $nama_dinas,
            'alamat'        => $alamat

        );

        $this->m_dinas->inputData($data, 'dinas');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        Data Berhasil Ditambahkan!
        </div>');
        redirect('dinas/index');

    }
    public function hapusData($kode_dinas)
    {
        $where = array('kode_dinas' => $kode_dinas);

        $this->m_dinas->hapusData($where, 'dinas');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        Data Berhasil Dihapus!
        </div>');
        redirect('dinas/index');
    }
    public function editData($kode_dinas)
    {
        $where = array('kode_dinas' => $kode_dinas );
        $data['dinas'] = $this->m_dinas->editData($where, 'dinas')->result();

      $this->load->view('templates/header');
		  $this->load->view('templates/sidebar');
		  $this->load->view('editDinas', $data);
		  $this->load->view('templates/footer');
    }
    public function updateData()
    {
      $kode_dinas   = $this->input->post('kode_dinas');
      $nama_dinas   = $this->input->post('nama_dinas');
      $alamat       = $this->input->post('alamat');

      $data = array(
          'kode_dinas'    => $kode_dinas,
          'nama_dinas'    => $nama_dinas,
          'alamat'        => $alamat
      );

      $where = array('kode_dinas' => $kode_dinas);
      $this->m_dinas->updateData($where, $data, 'dinas');
      $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        Data Berhasil Diupdate!
        </div>');
      redirect('dinas/index');
    }
    public function print()
    {
      $data['dinas'] = $this->m_dinas->tampilData('dinas')->result();
      $this->load->view('print_dinas', $data);
    }
    public function search()
    {
      $keyword = $this->input->post('keywordDinas');
      $data['dinas'] = $this->m_dinas->search($keyword);

      $this->load->view('templates/header');
		  $this->load->view('templates/sidebar');
		  $this->load->view('dinas', $data);
		  $this->load->view('templates/footer');
    }
}

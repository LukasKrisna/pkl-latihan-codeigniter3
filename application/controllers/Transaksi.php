<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller 
{
    public function index()
    {
        $data['transaksi'] = $this->m_transaksi->tampilData()->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi', $data);
		$this->load->view('templates/footer');
    }
    public function inputData()
    {
        $kode_transaksi     = $this->input->post('kode_transaksi');
        $kode_dinas         = $this->input->post('kode_dinas');
        $kode_barang        = $this->input->post('kode_barang');
        $harga              = $this->input->post('harga');
        $tempat_pembelian   = $this->input->post('tempat_pembelian');
        $tanggal_pembelian  = $this->input->post('tanggal_pembelian');
        $keterangan         = $this->input->post('keterangan');

        $data = array(
            'kode_transaksi'    => $kode_transaksi,
            'kode_dinas'        => $kode_dinas,
            'kode_barang'       => $kode_barang,
            'harga'             => $harga,
            'tempat_pembelian'  => $tempat_pembelian,
            'tanggal_pembelian' => $tanggal_pembelian,
            'keterangan'        => $keterangan 
        );

        $this->m_transaksi->inputData($data, 'transaksi');
        $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          Data Berhasil Ditambahkan!
        </div>');

        redirect('transaksi/index');
    }
    public function hapusData($kode_transaksi)
    {
        $where = array('kode_transaksi' => $kode_transaksi);
        $this->m_transaksi->hapusData($where, 'transaksi');
        $this->session->set_flashdata('message', '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          Data Berhasil Dihapus!
        </div>');

        redirect('transaksi/index');
    }
    public function editData($kode_transaksi)
    {
        $where = array('kode_transaksi' => $kode_transaksi);
        $data['transaksi'] = $this->m_transaksi->editData($where, 'transaksi')->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('editTransaksi', $data);
		$this->load->view('templates/footer');
    }
    public function updateData()
    {
        $kode_transaksi     = $this->input->post('kode_transaksi');
        $kode_dinas         = $this->input->post('kode_dinas');
        $kode_barang        = $this->input->post('kode_barang');
        $harga              = $this->input->post('harga');
        $tempat_pembelian   = $this->input->post('tempat_pembelian');
        $tanggal_pembelian  = $this->input->post('tanggal_pembelian');
        $keterangan         = $this->input->post('keterangan');

        $data = array(
            'kode_transaksi'    => $kode_transaksi,
            'kode_dinas'        => $kode_dinas,
            'kode_barang'       => $kode_barang,
            'harga'             => $harga,
            'tempat_pembelian'  => $tempat_pembelian,
            'tanggal_pembelian' => $tanggal_pembelian,
            'keterangan'        => $keterangan 
        );
        $where = array('kode_barang' => $kode_barang, );
        $this->m_transaksi->updateData($where, $data, 'transaksi');
        $this->session->set_flashdata('message', '
        <div class="alert alert-primary alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          Data Berhasil Diupdate!
        </div>');

        redirect('transaksi/index');
    }
    public function detailData($kode_transaksi)
    {
        $this->load->model('m_transaksi');
        $detail = $this->m_transaksi->detailData($kode_transaksi);
        $data['detail'] = $detail;

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detailTransaksi', $data);
		$this->load->view('templates/footer');
    }
    public function printData()
    {
        $data['transaksi'] = $this->m_transaksi->tampilData()->result();
        $this->load->view('print_transaksi', $data);
    }
    public function searchData()
    {
        $keyword = $this->input->post('keyword');
        $data['transaksi'] = $this->m_transaksi->searchData($keyword);

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi', $data);
		$this->load->view('templates/footer');
    }
}


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
}

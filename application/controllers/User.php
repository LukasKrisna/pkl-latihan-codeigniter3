<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {   
        // $data['user'] = $this->db->get_where('user', [
            // 'email' => $this->session->userdata('email')
        // ])->row_array();
        $data['dinas'] = $this->m_dinas->tampilData()->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dinas', $data);
		$this->load->view('templates/footer');
    }
}

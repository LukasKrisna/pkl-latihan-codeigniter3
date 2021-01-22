<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index ()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ( $this->form_validation->run() == false ) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
          $this->_login();  
        }
            
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah ter-registrasi'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password2]');

        if ( $this->form_validation->run() == false ) {
            $data['title'] = 'Register';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');

        } else {
            $data = [
                'nama'          => htmlspecialchars($this->input->post('nama', true)),
                'email'         => htmlspecialchars($this->input->post('email', true)),
                'foto'          => 'default.jpg',
                'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id'       => 2,
                'is_active'     => 1,
                'date_created'  => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('register', '<div class="alert alert-success" role="alert">
            Akun berhasil ter-registrasi!</div>');
            redirect('auth');
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        
        if ( $user ) {

            if ( $user['is_active'] == 1 ) {

                if ( password_verify($password, $user['password']) ) {
                    $data = [
                        'email'     => $user['email'],
                        'role_id'   => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');

                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password salah</div>');
                    redirect('auth');  
                }

            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email belum di-aktivasi</div>');
                redirect('auth');    
            }

        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum ter-registrasi</div>');
            redirect('auth');
        }
        
    }
}

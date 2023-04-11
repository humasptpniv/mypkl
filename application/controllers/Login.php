<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        
    }


    public function index()
    {
        $data['page_title'] = "Log In";
        $this->load->view('login/login.php', $data);
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    public function check_login()
    {
        $data = $this->m_login->m_check_username();
        if (empty($data['userdata']) || empty($data['usersetting'])) {
            $this->session->set_flashdata('message', "notyf.error('Email atau kata sandi salah!')");
            $this->session->set_flashdata('username', $this->input->post('username'));
            redirect('login', 'refresh');
        } else {
            $this->session->set_userdata($data);
            $nama = $data['userdata']['nama'];
            $this->session->set_flashdata('message', "notyf.success('Selamat Datang $nama')");
            $this->session->set_userdata('info-message', "notyf.success('Selamat Datang $nama')");
            redirect($data['userdata']['role']);
        }
    }

    public function register()
    {
        $this->m_login->m_register();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('url'));
        // $this->load->model('m_login');
    }


    public function index()
    {
        $data['page_title'] = "Daftar Akun";
        $this->load->view('register/register.php', $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$base_url=base_url();
	}

	public function index()
	{
		redirect('user/dashboard','refresh');
	}

	
	public function dashboard()
	{
		$data = array('page_title' => 'Profil Pengguna', 'm1' => 'active');
		$this->load->view('__partials/head.php', $data+$this->session->userdata('usersetting')+$this->session->userdata('userdata'));
		$this->load->view('__partials/sidebar.php');
		$this->load->view('user/dashboard.php');
		$this->load->view('__partials/foot.php');
	}

	public function profil()
	{
		$data = array('page_title' => 'Profil Pengguna', 'm6' => 'active');
		$this->load->view('__partials/head.php', $data+$this->session->userdata('usersetting')+$this->session->userdata('userdata'));
		$this->load->view('__partials/sidebar.php');
		$this->load->view('__partials/profile.php');
		$this->load->view('__partials/foot.php');
	}
	public function pengaturan()
	{
		$data = array('page_title' => 'Pengaturan', 'm7' => 'active');
		$this->load->view('__partials/head.php', $data+$this->session->userdata('usersetting')+$this->session->userdata('userdata'));
		$this->load->view('__partials/sidebar.php');
		$this->load->view('__partials/settings.php');
		$this->load->view('__partials/foot.php');
	}
	public function form_pengajuan()
	{
		$data = array('page_title' => 'Form Pengajuan PKL', 'm2' => 'active');
		$this->load->view('__partials/head.php', $data+$this->session->userdata('usersetting')+$this->session->userdata('userdata'));
		$this->load->view('__partials/sidebar.php');
		$this->load->view('user/form_pengajuan.php');
		$this->load->view('__partials/foot.php');
	}
	public function pengajuan_saya()
	{
		$data = array('page_title' => 'Surat Pengajuan PKL Saya', 'm3' => 'active');
		$this->load->view('__partials/head.php',$data);
		$this->load->view('__partials/sidebar.php',$this->session->userdata('usersetting'));
		$this->load->view('user/surat_saya.php');
		$this->load->view('__partials/foot.php');
	}
}

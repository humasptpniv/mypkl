<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{
	public function index()
	{
		redirect('admin/dashboard', 'refresh');
	}

	public function dashboard()
	{
		$data = array('page_title' => 'Dashboard', 'm1' => 'active');
		$this->load->view('__partials/head.php', $data+$this->session->userdata('usersetting')+$this->session->userdata('userdata'));
		$this->load->view('__partials/sidebar.php');
		$this->load->view('admin/dashboard.php');
		$this->load->view('__partials/foot.php');
	}

	public function profil()
	{
		$data = array('page_title' => 'Profil', 'm6' => 'active');
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
	public function daftar_surat()
	{
		$data = array('page_title' => 'Daftar Surat', 'm2' => 'active');
		$this->load->view('__partials/head.php', $data+$this->session->userdata('usersetting')+$this->session->userdata('userdata'));
		$this->load->view('__partials/sidebar.php');
		$this->load->view('admin/daftar_surat.php');
		$this->load->view('__partials/foot.php');
	}

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->helper(array('form', 'url'));
	// 	$this->load->model('m_home');
	// }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/

	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
	// 	$fname_arr = null;
	// 	$foldername_array = directory_map('./media/upload/');
	// 	$keys = array_keys($foldername_array);
	// 	for ($i = 0; $i < count($foldername_array); $i++) {
	// 		$foldername = str_replace("\\", '', $keys[$i]);
	// 		$fname_arr[$i] = $foldername;
	// 	}

	// 	$daftar_distrik = ($this->m_home->m_get_distrik()->result_array());
	// 	$daftar_distrik = $daftar_distrik[0];
	// 	$this->load->view('uploader/v_uploader.php', array('daftar_distrik' => $daftar_distrik, 'fname' => $fname_arr));
	// }


	// public function image_uploader()
	// {
	// 	$path = './media/upload/' . $this->input->post('folder') . '/';
	// 	$config['upload_path']   = $path;
	// 	$config['allowed_types'] = 'gif|jpg|png';
	// 	$config['max_size']      = 10240;
	// 	$config['overwrite']      = true;
	// 	$this->load->library('upload', $config);
	// 	if (!$this->upload->do_upload('file')) {
	// 		$message = array('message' => $this->upload->display_errors(), 'path' => $config['upload_path']);
	// 		$this->load->view('uploader/err', array('message' => $config['upload_path']));
	// 	} else {
	// 		$message = array('message' => $this->upload->data());
	// 	}
	// }
}

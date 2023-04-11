<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function m_check_username()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $userdata = $this->db->query("SELECT* FROM `user` WHERE username = '$username'");
        if ($userdata->num_rows() == 0) {
            return;
        }
        $userdata = $userdata->result_array()[0];
        if (password_verify($password, $userdata['password'])) {
            $id_setting = $userdata['id_setting'];
            $usersetting = $this->db->query("SELECT* FROM `setting` WHERE id_setting = '$id_setting'")->result_array()[0];
            return array(
                'userdata' => $userdata,
                'usersetting' => $usersetting
            );
        } else {
            return;
        }
    }

    public function m_register()
    {
        $data = $this->input->post();
        extract($data);
        $match = $this->db->select('username')->from('user')->where('username', $username)->get()->result_array();
        if (empty($match)) {
            $pass_hash = password_hash("$password", PASSWORD_DEFAULT);
            $data['password'] = $pass_hash;
            $data['role'] = 'user';
            $data['id_setting'] = '2';
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'notyf.success("Akun berhasil dibuat, silakan login")');
            redirect('login');
        } else {
            $this->session->set_flashdata('nama', $nama);
            $this->session->set_flashdata('message', 'notyf.error("Email sudah digunakan, mohon coba lagi")');
            redirect('login?s=reg');
        }
    }
}

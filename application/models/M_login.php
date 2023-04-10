<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function m_check_username()
    {
        $username = $this->input->post('username');
        $userdata = $this->db->query("SELECT* FROM `user` WHERE username = '$username'")->result_array()[0];
        $id_setting = $userdata['id_setting'];
        $usersetting = $this->db->query("SELECT* FROM `setting` WHERE id_setting = '$id_setting'")->result_array()[0];
        return array(
            'userdata' => $userdata,
            'usersetting' => $usersetting
        );
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Setting extends CI_Controller
{
    public function save_setting()
    {
        $sidebar = $this->input->post('sidebar-type');
        $navbar = $this->input->post('navbar-type');
        $this->session->set_userdata('color', $this->input->post('color'));
        $color =  $this->input->post('color');
        $id_setting =  $this->input->post('id_setting');
        $this->db->query("UPDATE `setting` SET `color`='$color', `sidebar_type`='$sidebar', `navbar_type`='$navbar' WHERE `id_setting`= '$id_setting'");
        $data = $this->db->query("SELECT* FROM `setting` WHERE id_setting = '$id_setting'")->result_array()[0];
        $this->session->set_userdata(array('usersetting' => $data));
        redirect($this->input->post('current'), 'refresh');
    }
}

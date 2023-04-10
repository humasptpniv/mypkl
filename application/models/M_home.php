<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{
    public function m_get_distrik()
    {
        return $this->db->get('distrik');
    }
}

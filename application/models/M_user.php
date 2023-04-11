<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function m_ajukan_surat()
    {
        $formdata = $this->input->post();
        if (!empty($formdata['fpsp']) && !empty($formdata['fpsp']) && !empty($formdata['fpsp'])) {
            $formdata['ttl'] = $formdata['tl'] . ", " . $formdata['tgl'];
            $id_user = $this->session->userdata('userdata')['id_user'];

            unset($formdata['tl']);
            unset($formdata['tgl']);
            unset($formdata['fpsp']);
            unset($formdata['fktp']);
            unset($formdata['fktm']);
            var_dump($formdata);
            $this->db->where('id_dokumen', $id_user)->update('dokumen', $formdata);
            echo $this->db->last_query();
        } else {
            var_dump($formdata);
        }
    }
    public function m_surat_saya()
    {
        $id_user = $this->session->userdata('userdata')['id_user'];
        $formdata= $this->db->select('*')->from('dokumen')->where('id_dokumen', $id_user)->get()->result_array();
        if(!empty($formdata)){
            return $formdata[0];
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function m_ajukan_surat()
    {
        $formdata = $this->input->post();
        if (!empty($formdata['fpsp']) && !empty($formdata['fpsp']) && !empty($formdata['fpsp'])) {
            $id_user = $this->session->userdata('userdata')['id_user'];
            unset($formdata['fpsp']);
            unset($formdata['fktp']);
            unset($formdata['fktm']);
            $this->db->where('id_dokumen', $id_user)->update('dokumen', $formdata);
            $this->session->set_flashdata('message',"notyf.success('Data Berhasil Disimpan')");
            return true;
        } else {
            return false;
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

    public function monthname($tgl)
    {
        $this->db->query("SET lc_time_names = 'id_ID';");
        return $this->db->query("SELECT (DATE_FORMAT('$tgl','%d %M %Y')) as tgl;")->result_array()[0]['tgl']; 
    }
}

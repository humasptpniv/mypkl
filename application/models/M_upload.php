<?php
class M_upload extends CI_Model{
 
    function save_upload($title,$image){
        $data = array(
                'title'     => $title,
                'file_name' => $image
            );  
        $result= $this->db->insert('gallery',$data);
        return $result;
    }
 
     
}
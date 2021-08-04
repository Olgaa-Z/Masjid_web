<?php

class Galery_m extends CI_Model{
     

    function selectDataGaleri(){
        return $this->db->query("SELECT * FROM tb_galeri  ORDER BY tanggal DESC")->result();
    }

    function insert_galeri($data){
        $this->db->insert('tb_galeri',$data);
    }

    function delete_galeri($id){
        $this->db->where('id_foto',$id);
        $this->db->delete('tb_galeri');
    }


    function data_editgaleri($id){
        return $this->db->query("Select * FROM tb_galeri WHERE id_foto='$id'")->result();
    }

    function edit_galeri($id,$data){
        
        $this->db->where('id_foto',$id);
        $this->db->update('tb_galeri',$data);
    }
    
}
<?php

class Galery_m extends CI_Model{
     

    function selectDataGaleri(){
        return $this->db->query("SELECT * FROM tb_galeri  ORDER BY tanggal DESC")->result();
    }

    function insert_galeri($data){
        $this->db->insert('tb_galeri',$data);
    }
}
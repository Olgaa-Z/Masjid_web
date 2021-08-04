<?php

class Berita_m extends Ci_Model{

    public function selectData(){
        return $this->db->query("SELECT * FROM tb_berita ORDER BY tanggal_berita DESC")->result();
    }

    function insert_post($title,$contents){
        $data = array(
            'title'    => $title,
            'description' => $contents
        );
        $this->db->insert('tb_post',$data);
    }
 
    function get_article_by_id($id){
        $query = $this->db->get_where('tb_post', array('id' =>  $id));
        return $query;
    }

    function insert_berita($data){
        $this->db->insert('tb_berita',$data);
    }
    
}
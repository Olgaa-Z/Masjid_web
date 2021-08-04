<?php   

class Berita_m extends CI_Model{

     public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function selectData(){
        return $this->db->query("Select * FROM tb_berita  ORDER BY tanggal_berita DESC ")->result();
    }

    function selectDataNewsHome(){
        return $this->db->query("Select * FROM tb_berita  ORDER BY tanggal_berita DESC LIMIT 3")->result();
    }

    function detailnews(){
        return $this->db->query("Select * FROM tb_berita WHERE id_berita='11'")->result();
    }

    
    function selectid($id_){
        return $this->db->query("Select * FROM tb_berita WHERE id_berita='$id_'")->result();
    }

    public function detail($id){
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->where('id_berita', $id);
        $result= $this->db->get();
        return $result;
    }
    
}
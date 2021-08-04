<?php

class Jamaah_m extends Ci_Model{

    public function selectData(){
        return $this->db->query("SELECT * FROM tb_jamaah ORDER BY added_on DESC")->result();
    }

    public function selectJamaahZakat(){
        return $this->db->query("SELECT * FROM tb_jamaah where zakat='ya' ORDER BY added_on DESC")->result();
    }

    function delete_jamaah($id){
        $this->db->where('id_jamaah',$id);
        $this->db->delete('tb_jamaah');
    }

    function insert_jamaah($data){
        $this->db->insert('tb_jamaah',$data);
    }

    function editjamaahdata($id){
        return $this->db->query("Select * FROM tb_jamaah WHERE id_jamaah='$id'")->result();
    }

    function edit_jamaah($id,$data){
        
        $this->db->where('id_jamaah',$id);
        $this->db->update('tb_jamaah',$data);
    }

    
    

    
}

?>
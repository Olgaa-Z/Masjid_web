<?php

class Jamaah_m extends Ci_Model{

    public function selectData(){
        return $this->db->query("SELECT * FROM tb_jamaah ORDER BY added_on DESC")->result();
    }

    function delete_jamaah($id){
        $this->db->where('id_jamaah',$id);
        $this->db->delete('tb_jamaah');
    }

    function insert_jamaah($data){
        $this->db->insert('tb_jamaah',$data);
    }

    
}

?>
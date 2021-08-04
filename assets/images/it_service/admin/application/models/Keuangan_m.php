<?php

class Keuangan_m extends Ci_Model{

    public function selectData(){
        return $this->db->query("SELECT * FROM tb_keuangan where pemasukan NOT IN ('0') ORDER BY added_on DESC")->result();
    }

    public function selectDataPengeluaran(){
        return $this->db->query("SELECT * FROM tb_keuangan where pengeluaran NOT IN ('0') ORDER BY added_on DESC")->result();
    }

    function insert_pemasukan($data){
        $this->db->insert('tb_keuangan',$data);
    }

    function delete_pemasukan($id){
        $this->db->where('id_keuangan',$id);
        $this->db->delete('tb_keuangan');
    }
}
?>
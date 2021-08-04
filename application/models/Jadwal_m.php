<?php  

class Jadwal_m extends Ci_model{

    function selectDataKajian(){
        return $this->db->query(" SELECT * FROM tb_jadwal_kajian ORDER BY tanggal DESC")->result();
    }

    public function selectDataJumat(){
        return $this->db->query("SELECT * FROM tb_jadwal_jumatan ORDER BY tanggal DESC")->result();
    }

    function selectDataTpa(){
        return $this->db->query(" SELECT * FROM tb_jadwal_tpa ORDER BY tanggal DESC")->result();
    }

    function selectDataLainnya(){
        return $this->db->query(" SELECT * FROM tb_jadwal_lainnya ORDER BY tanggal DESC")->result();
    }

    function selectid($id){
        return $this->db->query("Select * FROM tb_jadwal_kajian WHERE id='$id'")->result();
    }

    
}
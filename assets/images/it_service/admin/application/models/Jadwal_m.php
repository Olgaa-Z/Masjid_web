<?php

class Jadwal_m extends CI_Model{


    function selectDataJumatan(){
        return $this->db->query("SELECT * FROM tb_jadwal_jumatan  ORDER BY tanggal DESC")->result();
    }

    function selectDataTpa(){
        return $this->db->query("SELECT * FROM tb_jadwal_tpa  ORDER BY tanggal DESC")->result();
    }

    function selectDataKajian(){
        return $this->db->query("SELECT * FROM tb_jadwal_kajian  ORDER BY tanggal DESC")->result();
    }

    function selectDataJadwallainnya(){
        return $this->db->query("SELECT * FROM tb_jadwal_lainnya ORDER BY tanggal DESC")->result();
    }

    function insert_jadwaljumat($data){
        $this->db->insert('tb_jadwal_jumatan', $data);
    }

    function insert_jadwaltpa($data){
        $this->db->insert('tb_jadwal_tpa', $data);
    } 

    function insert_jadwalkajian($data){
        $this->db->insert('tb_jadwal_kajian', $data);
    }

    function insert_jadwallainnya($data){
        $this->db->insert('tb_jadwal_lainnya', $data);
    }
}

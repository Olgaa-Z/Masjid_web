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


    //DELETE

    function delete_jumat($id){
        $this->db->where('id',$id);
        $this->db->delete('tb_jadwal_jumatan');
    }

    function delete_kajian($id){
        $this->db->where('id',$id);
        $this->db->delete('tb_jadwal_kajian');
    }

    function delete_tpa($id){
        $this->db->where('id',$id);
        $this->db->delete('tb_jadwal_tpa');
    }

    
    function delete_lainnya($id){
        $this->db->where('id',$id);
        $this->db->delete('tb_jadwal_lainnya');
    }
    
    

    //EDIT

    function data_editjumat($id){
        return $this->db->query("Select * FROM tb_jadwal_jumatan WHERE id='$id'")->result();
    }

    function edit_jumat($id,$data){
        $this->db->where('id',$id);
        $this->db->update('tb_jadwal_jumatan',$data);
    }


    
    function data_editkajian($id){
        return $this->db->query("Select * FROM tb_jadwal_kajian WHERE id='$id'")->result();
    }

    function edit_kajian($id,$data){
        $this->db->where('id',$id);
        $this->db->update('tb_jadwal_kajian',$data);
    }


    function data_edittpa($id){
        return $this->db->query("Select * FROM tb_jadwal_tpa WHERE id='$id'")->result();
    }

    function edit_tpa($id,$data){
        $this->db->where('id',$id);
        $this->db->update('tb_jadwal_tpa',$data);
    }

    function data_editlainnya($id){
        return $this->db->query("Select * FROM tb_jadwal_lainnya WHERE id='$id'")->result();
    }

    function edit_lainnya($id,$data){
        $this->db->where('id',$id);
        $this->db->update('tb_jadwal_lainnya',$data);
    }




    

    
}

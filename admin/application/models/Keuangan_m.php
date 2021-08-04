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

    function show_saldo(){
      $thn=date("Y");
      $bln=date("m");
      $hari=date("d");

      return $this->db->query("select * from tb_keuangan  WHERE YEAR(tanggal)='$thn'  AND month(tanggal)='$bln' ORDER BY  added_on ")->result();
    }

    function show_saldo_y(){
        $thn=date("Y");
        $bln=date("m");
        $hari=date("d");
  
        return $this->db->query("select * from tb_keuangan  WHERE YEAR(tanggal)='$thn' ORDER BY  added_on ")->result();
      }

    public function show_saldo_range($tanggal1,$tanggal2){
        
        return $this->db->query("select * from tb_keuangan WHERE tanggal between '$tanggal1' AND '$tanggal2' ORDER BY tanggal  ")->result();
        
    }

    //EDIT KEUANGAN

    function data_editkeuangan($id){
        return $this->db->query("Select * FROM tb_keuangan WHERE id_keuangan='$id'")->result();
    }

    function edit_keuangan($id,$data){
        $this->db->where('id_keuangan',$id);
        $this->db->update('tb_keuangan',$data);
    }

    public function sum_total_pemasukan_year(){

        $thn=date("Y");
        $bln=date("m");
        $hari=date("d");
  
  
         return $this->db->query("SELECT sum(pemasukan) as count_omset from tb_keuangan WHERE YEAR(tanggal)='$thn'   " )->row();
  
  
      }

      public function sum_total_pengeluaran_year(){

        $thn=date("Y");
        $bln=date("m");
        $hari=date("d");
  
  
         return $this->db->query("SELECT sum(pengeluaran) as count_omset from tb_keuangan WHERE YEAR(tanggal)='$thn'   " )->row();
  
  
      }


}
?>
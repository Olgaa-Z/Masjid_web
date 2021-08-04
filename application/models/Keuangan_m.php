<?php

class Keuangan_m extends Ci_Model{

    public function selectData(){
        return $this->db->query("SELECT * FROM tb_keuangan where pemasukan NOT IN ('0') ORDER BY added_on DESC")->result();
    }

     public function selectDataMonth(){
      
       $thn=date("Y");
       $bln=date("m");
       $hari=date("d");

        return $this->db->query("SELECT * FROM tb_keuangan WHERE YEAR(tanggal)='$thn'  AND month(tanggal)='$bln' AND pengeluaran NOT IN ('0')  ORDER BY added_on DESC")->result();
    }


    public function selectDataPengeluaran(){
        return $this->db->query("SELECT * FROM tb_keuangan where pengeluaran NOT IN ('0') ORDER BY added_on DESC")->result();
    }

    public function selectDataPengeluaranMonth(){

      $thn=date("Y");
      $bln=date("m");
      $hari=date("d");

        return $this->db->query("SELECT * FROM tb_keuangan WHERE YEAR(tanggal)='$thn'  AND month(tanggal)='$bln' AND pengeluaran NOT IN ('0')  ORDER BY added_on DESC")->result();
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

      return $this->db->query("select * from tb_keuangan  WHERE YEAR(tanggal)='$thn'  AND month(tanggal)='$bln' ORDER BY  tanggal  ")->result();
    }

    function show_saldotahun(){
      $thn=date("Y");
      $bln=date("m");
      $hari=date("d");

      return $this->db->query("select * from tb_keuangan  WHERE YEAR(tanggal)='$thn' ORDER BY  tanggal  ")->result();
    }

     public function total_pemasukan_month(){

      $thn=date("Y");
      $bln=date("m");
      $hari=date("d");


       return $this->db->query("SELECT sum(pemasukan) as count_omset from tb_keuangan WHERE YEAR(tanggal)='$thn'  AND month(tanggal)='$bln' " )->row();


    }

    public function total_pengeluaran_month(){

      $thn=date("Y");
      $bln=date("m");
      $hari=date("d");


       return $this->db->query("SELECT sum(pengeluaran) as count_omset from tb_keuangan WHERE YEAR(tanggal)='$thn'  AND month(tanggal)='$bln' " )->row();


    }

     public function sum_total_pengeluaran_year(){

        $thn=date("Y");
        $bln=date("m");
        $hari=date("d");
  
  
         return $this->db->query("SELECT sum(pengeluaran) as count_omset from tb_keuangan WHERE YEAR(tanggal)='$thn'   " )->row();
  
  
      }

}
?>
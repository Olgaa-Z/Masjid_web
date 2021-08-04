<?php

class Etc extends CI_Model {

       //put your code here
    public function rp($angka) {
        $rupiah = number_format($angka, 0, ',', '.');
        return $rupiah;
    }

    public function rps($angka) {
        $rupiah = number_format($angka, 0, ',', '.');
        return "Rp " . $rupiah;
    }

    
    function bulan($tgl) {
        $bulan = substr($tgl, 5, 2);
        Switch ($bulan) {
            case 1 : $bulan = "Januari";
                Break;
            case 2 : $bulan = "Februari";
                Break;
            case 3 : $bulan = "Maret";
                Break;
            case 4 : $bulan = "April";
                Break;
            case 5 : $bulan = "Mei";
                Break;
            case 6 : $bulan = "Juni";
                Break;
            case 7 : $bulan = "Juli";
                Break;
            case 8 : $bulan = "Agustus";
                Break;
            case 9 : $bulan = "September";
                Break;
            case 10 : $bulan = "Oktober";
                Break;
            case 11 : $bulan = "November";
                Break;
            case 12 : $bulan = "Desember";
                Break;
        }
        return $bulan;
    }

    function tgl($tgl) {
        $hari = substr($tgl, 8, 2);
        $tahun = substr($tgl, 0, 4);
        $nama_bulan = $this->bulan($tgl);
        $tgl_oke = $hari . ' ' . $nama_bulan . ' ' . $tahun;
        return $tgl_oke;
    }

    function selectDataSocmed(){
        return $this->db->query("SELECT * FROM tb_socmed ")->result();
    }

    
    function delete_socmed($id){
        $this->db->where('id',$id);
        $this->db->delete('tb_socmed');
    }

    function data_editsocmed($id){
        return $this->db->query("Select * FROM tb_socmed WHERE id='$id'")->result();
    }

    function edit_socmed($id,$data){
        $this->db->where('id',$id);
        $this->db->update('tb_socmed',$data);
    }


}
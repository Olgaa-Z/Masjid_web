<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Import_model extends CI_Model
{
    public function import_data($databarang)
    {
        $jumlah = count($databarang);
        if ($jumlah > 0) {
            $this->db->replace('tb_jamaah', $databarang);
        }
    }

    public function getDataBarang()
    {
        return $this->db->get('tb_jamaah')->result_array();
    }
}

<?php

class Jadwal extends Ci_Controller{

    function select_by($id) {

        $data['tb_jadwal_kajian'] = $this->Jadwal_m->selectid($id);
        $this->load->view('jadwal/detailjadwalkajian', $data);
    }

    
}
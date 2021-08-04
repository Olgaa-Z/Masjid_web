<?php

class Jadwal extends Ci_COntroller{

    function jadwaljumat(){
        $this->load->view('jadwal/jadwal_jumat');
    }

    function jadwaltpa(){
        $this->load->view('jadwal/jadwal_tpa');
    }

    function jadwalkajian(){
        $this->load->view('jadwal/jadwal_kajian');
    }

    function jadwallainnya(){
        $this->load->view('jadwal/jadwal_lainnya');
    }

    function formjadwaljumat(){
        $this->load->view('jadwal/form_jadwaljumat');
    }

    function formjadwaltpa(){
        $this->load->view('jadwal/form_tpa');
    }        

    function formjadwalkajian(){
        $this->load->view('jadwal/formjadwalkajian');
    }

    function formjadwallainnya(){
        $this->load->view('jadwal/formjadwallainnya');
    }

    function insertjadwalJumat(){
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'imam' => $this->input->post('imam'),
            'khatib' => $this->input->post('khatib'),
            'muazin' => $this->input->post('muazin')

        );
        $this->Jadwal_m->insert_jadwaljumat($data);
       
 
        $error = array(
            'error' => $this->upload->display_errors()
        );
        echo json_encode($error);

    redirect('Jadwal/jadwaljumat');
    }

    function insertjadwaltpa(){

        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan')

        );
        $this->Jadwal_m->insert_jadwaltpa($data);
       
 
        $error = array(
            'error' => $this->upload->display_errors()
        );
        echo json_encode($error);

    redirect('Jadwal/jadwaltpa');

    }


    function insertjadwalkajian(){

        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'ustadz' => $this->input->post('ustadz'),
            'keterangan' => $this->input->post('keterangan')

        );
        $this->Jadwal_m->insert_jadwalkajian($data);
       
 
        $error = array(
            'error' => $this->upload->display_errors()
        );
        echo json_encode($error);

    redirect('Jadwal/jadwalkajian');

    }

    function insertjadwallainnya(){
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'kegiatan' => $this->input->post('kegiatan'),
            'keterangan' => $this->input->post('keterangan')

        );
        $this->Jadwal_m->insert_jadwallainnya($data);
       
 
        $error = array(
            'error' => $this->upload->display_errors()
        );
        echo json_encode($error);

    redirect('Jadwal/jadwallainnya');

    }
}

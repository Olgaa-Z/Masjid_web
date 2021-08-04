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
            'judul_kajian' => $this->input->post('judul_kajian'),
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

    //DELETE

    function deleteJumat($id){
        $this->Jadwal_m->delete_jumat($id);
        redirect('Jadwal/jadwaljumat');
    }

    function deleteKajian($id){
        $this->Jadwal_m->delete_kajian($id);
        redirect('Jadwal/jadwalkajian');
    }

    function deleteTpa($id){
        $this->Jadwal_m->delete_tpa($id);
        redirect('Jadwal/jadwaltpa');
    }

    
    function deleteLainnya($id){
        $this->Jadwal_m->delete_lainnya($id);
        redirect('Jadwal/jadwallainnya');
    }



    //EDIT

    function editjumatform($id) {

        $data['tb_jadwal_jumatan'] = $this->Jadwal_m->data_editjumat($id);
        $this->load->view('jadwal/edit_jumat', $data);
    }

    function editJumat(){
        $id = $this->input->post('id');

            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'imam' => $this->input->post('imam'),
                'khatib' => $this->input->post('khatib'),
                'muazin' => $this->input->post('muazin')
               
            );  
        $this->Jadwal_m->edit_jumat($id, $data);
        redirect('Jadwal/jadwaljumat');
    }



    function editkajianform($id) {

        $data['tb_jadwal_kajian'] = $this->Jadwal_m->data_editkajian($id);
        $this->load->view('jadwal/edit_kajian', $data);
    }


    
    function editKajian(){
        $id = $this->input->post('id');

            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'judul_kajian' => $this->input->post('judul_kajian'),
                'ustadz' => $this->input->post('ustadz'),
                'keterangan' => $this->input->post('keterangan')
               
            );  
        $this->Jadwal_m->edit_kajian($id, $data);
        redirect('Jadwal/jadwalkajian');
    }


    function edittpaform($id) {

        $data['tb_jadwal_tpa'] = $this->Jadwal_m->data_edittpa($id);
        $this->load->view('jadwal/edit_tpa', $data);
    }
    
    function editTpa(){
        $id = $this->input->post('id');

            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'keterangan' => $this->input->post('keterangan')
               
            );  
        $this->Jadwal_m->edit_tpa($id, $data);
        redirect('Jadwal/jadwaltpa');
    }


    function editlainnyaform($id) {

        $data['tb_jadwal_tpa'] = $this->Jadwal_m->data_editlainnya($id);
        $this->load->view('jadwal/edit_lainnya', $data);
    }
    
    function editLainnya(){
        $id = $this->input->post('id');

            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'kegiatan' => $this->input->post('kegiatan'),
                'keterangan' => $this->input->post('keterangan')
               
            );  
        $this->Jadwal_m->edit_lainnya($id, $data);
        redirect('Jadwal/jadwallainnya');
    }




}

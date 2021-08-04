<?php

class Jamaah extends Ci_Controller{

    function index(){
        $this->load->view('jamaah/jamaah_v');
    }

    function formJamaah(){
        $this->load->view('jamaah/jamaah_form');
    }

    function importJamaah(){
        $this->load->view('jamaah/import_jamaah');
    }

    function deleteJamaah($id_jamaah){
        $this->Jamaah_m->delete_jamaah($id_jamaah);
        redirect('Jamaah');
    }

    function insertJamaah(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'umur' => $this->input->post('umur'),
            'jk' => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat')
        );
        $this->Jamaah_m->insert_jamaah($data);
       
 
        $error = array(
            'error' => $this->upload->display_errors()
        );
        echo json_encode($error);

        redirect('Jamaah/index');
    }

    


}
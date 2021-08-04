<?php

class Galeri extends CI_Controller{

    function index(){
        $this->load->view('galeri/galeri');
    }

    function formgaleri(){
        $this->load->view('galeri/formgaleri');
    }

    function insertgaleri(){
        $nm_file = time() . '.png';
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambar = $this->upload->data();
            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'keterangan' => $this->input->post('keterangan'),
                'foto' => $gambar['file_name']
            );
            $this->Galery_m->insert_galeri($data);
           
        } else {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            echo json_encode($error);
        }
        redirect('Galeri');
    }
}
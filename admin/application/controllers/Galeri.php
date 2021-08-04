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


    //DELETE

    function deleteGaleri($id){
        $this->Galery_m->delete_galeri($id);
        redirect('Galeri/index');
    }


    //EDIT

    function editgaleriform($id) {

        $data['tb_galeri'] = $this->Galery_m->data_editgaleri($id);
        $this->load->view('galeri/edit_galeri', $data);
    }

    function editGalery(){
        $id_foto = $this->input->post('id_foto');
        $nm_file = $this->input->post('foto');
        $config['upload_path'] = './assets/galeri/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            $gambar = $this->upload->data();
            $data = array(
                'keterangan' => $this->input->post('keterangan'),
                'tanggal' => $this->input->post('tanggal'),
                'foto' => $gambar['file_name']
            );
        } else {
            $data = array(
                'keterangan' => $this->input->post('keterangan'),
                'tanggal' => $this->input->post('tanggal')
               
            );  
        }


        $this->Galery_m->edit_galeri($id_foto, $data);
        redirect('Galeri');
    }
    

}
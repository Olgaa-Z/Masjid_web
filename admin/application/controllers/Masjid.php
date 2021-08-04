<?php

class Masjid extends Ci_Controller{

    public function index(){
        $this->load->view('masjid/masjid_v');
    }

    public function takmir(){
        $this->load->view('masjid/takmir_v');
    }

    public function fasilitas(){
        $this->load->view('masjid/fasilitas_v');
    }

    public function lainlain(){
        $this->load->view('masjid/lainlain');
    }

    public function visimisi(){
        $this->load->view('masjid/visimisi');
    }

    function takmirform(){
        $this->load->view('masjid/takmir_form');
    }

    function fasilitasform(){
        $this->load->view('masjid/fasilitas_form');
    }

    function edit_masjid(){
        $this->load->view('masjid/edit_masjid');
    }
    

    function insertTakmir(){
        $nm_file = time() . '.png';
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('fototakmir')) {
            $gambar = $this->upload->data();
            $data = array(
                // 'id_korong' => $this->input->post('id_korong'),
                'nama_takmir' => $this->input->post('namatakmir'),
                'jk_takmir' => $this->input->post('jk'),
                'no_hp' => $this->input->post('nohp'),
                'alamat' => $this->input->post('alamat'),
                'bidang' => $this->input->post('bidang'),
                'foto_takmir' => $gambar['file_name']
            );
            $this->Masjid_m->insert_takmir($data);
           
        } else {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            echo json_encode($error);
        }
        redirect('Masjid/takmir');
    }

    function deleteTakmir($id_takmir){
        $this->Masjid_m->delete_takmir($id_takmir);
        redirect('Masjid/takmir');
    }

    function edittakmirform($id_takmir){

        $data['tb_takmir'] = $this->Masjid_m->data_edittakmir($id_takmir);
        $this->load->view('masjid/edit_takmir', $data);
    }

    
    function editTakmir(){
        $id_takmir = $this->input->post('id_takmir');
        $nm_file = $this->input->post('foto_takmir');
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto_takmir')) {
            $gambar = $this->upload->data();
            $data = array(
                'nama_takmir' => $this->input->post('nama_takmir'),
                'jk_takmir' => $this->input->post('jk_takmir'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'bidang' => $this->input->post('bidang'),
                'foto_takmir' => $gambar['file_name']
            );
        } else {
            $data = array(
                'nama_takmir' => $this->input->post('nama_takmir'),
                'jk_takmir' => $this->input->post('jk_takmir'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'bidang' => $this->input->post('bidang')
               
            );  
        }


        $this->Masjid_m->edit_takmir($id_takmir, $data);
        redirect('Masjid/takmir');
    }

    function editmasjidform($id_masjid) {

        $data['tb_masjid'] = $this->Masjid_m->data_editmasjid($id_masjid);
        $this->load->view('masjid/edit_masjid', $data);
    }

    function editMasjid(){
        $id_masjid = $this->input->post('id_masjid');
        $nm_file = $this->input->post('logo');
        $config['upload_path'] = './assets/logo/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('logo')) {
            $gambar = $this->upload->data();
            $data = array(
                'nama_masjid' => $this->input->post('nama_masjid'),
                'alamat_masjid' => $this->input->post('alamat_masjid'),
                'no_telp' => $this->input->post('no_telp'),
                'email_masjid' => $this->input->post('email_masjid'),
                'deskripsi' => $this->input->post('deskripsi'),
                'logo' => $gambar['file_name']
            );
        } else {
            $data = array(
                'nama_masjid' => $this->input->post('nama_masjid'),
                'alamat_masjid' => $this->input->post('alamat_masjid'),
                'no_telp' => $this->input->post('no_telp'),
                'email_masjid' => $this->input->post('email_masjid'),
                'deskripsi' => $this->input->post('deskripsi')
               
            );  
        }


        $this->Masjid_m->edit_masjid($id_masjid, $data);
        redirect('Masjid');
    }

    function editLain(){
        $id_masjid = $this->input->post('id_masjid');

            $data = array(
                'sejarah' => $this->input->post('sejarah'),
                'visimisi' => $this->input->post('visimisi')
               
            );  
        $this->Masjid_m->edit_masjid($id_masjid, $data);
        redirect('Masjid/lainlain');
    }

    function editlainform($id_masjid) {

        $data['tb_masjid'] = $this->Masjid_m->data_editmasjid($id_masjid);
        $this->load->view('masjid/editlain', $data);
    }

    function editvisimisiform($id_masjid) {

        $data['tb_masjid'] = $this->Masjid_m->data_editmasjid($id_masjid);
        $this->load->view('masjid/edit_visimisi', $data);
    }

    function editVisimisi(){
        $id_masjid = $this->input->post('id_masjid');

            $data = array(
                'visimisi' => $this->input->post('visimisi')
               
            );  
        $this->Masjid_m->edit_masjid($id_masjid, $data);
        redirect('Masjid/visimisi');
    }

    function insertFasilitas(){
        $nm_file = time() . '.png';
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('fototakmir')) {
            $gambar = $this->upload->data();
            $data = array(
                // 'id_korong' => $this->input->post('id_korong'),
                'nama_takmir' => $this->input->post('namatakmir'),
                'jk_takmir' => $this->input->post('jk'),
                'no_hp' => $this->input->post('nohp'),
                'alamat' => $this->input->post('alamat'),
                'bidang' => $this->input->post('bidang'),
                'foto_takmir' => $gambar['file_name']
            );
            $this->Masjid_m->insert_takmir($data);
           
        } else {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            echo json_encode($error);
        }
        redirect('Masjid/takmir');
    }

    function deleteFasilitas($id_fasilitas){
        $this->Masjid_m->delete_fasilitas($id_fasilitas);
        redirect('Masjid/fasilitas');
    }

    function editFasilitas(){
        $id_fasilitas = $this->input->post('id_fasilitas');
        $nm_file = $this->input->post('gambar_fasilitas');
        $config['upload_path'] = './assets/fasilitas/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar_fasilitas')) {
            $gambar = $this->upload->data();
            $data = array(
                'nama_fasilitas' => $this->input->post('nama_fasilitas'),
                'gambar_fasilitas' => $gambar['file_name']
            );
        } else {
            $data = array(
                'nama_fasilitas' => $this->input->post('nama_fasilitas')
               
            );  
        }


        $this->Masjid_m->edit_fasilitas($id_fasilitas, $data);
        redirect('Masjid/fasilitas');
    }

    function editfasilitasform($id_fasilitas) {

        $data['tb_fasilitas'] = $this->Masjid_m->data_editmasjid($id_fasilitas);
        $this->load->view('masjid/fasilitas_edit', $data);
    }


    

}


?>
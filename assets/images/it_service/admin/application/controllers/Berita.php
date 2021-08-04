<?php

class Berita extends Ci_Controller{

    public function index(){
        $this->load->view('berita/berita_v');
    }

    public function formTambah(){
        $this->load->view('berita/formberita_v');
    }

    function save(){
        $title = $this->input->post('title',TRUE);
        $contents = $this->input->post('contents',TRUE);
        $this->post_model->insert_post($title,$contents);
        $id = $this->db->insert_id();
        $result = $this->post_model->get_article_by_id($id)->row_array();
        $data['title'] = $result['title'];
        $data['contents'] = $result['description'];
        $this->load->view('post_detail_view', $data);
    }
 
    //Upload image summernote
    function upload_image(){
        if(isset($_FILES["image"]["name"])){
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $this->upload->display_errors();
                return FALSE;
            }else{
                $data = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$data['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= TRUE;
                $config['quality']= '60%';
                $config['width']= 800;
                $config['height']= 800;
                $config['new_image']= './assets/images/'.$data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url().'assets/images/'.$data['file_name'];
            }
        }
    }
 
    //Delete image summernote
    function delete_image(){
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);
        if(unlink($file_name))
        {
            echo 'File Delete Successfully';
        }
    }

    function insert() {
        $nm_file = time() . '.png';
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar_berita')) {
            $gambar = $this->upload->data();
            $data = array(
                // 'id_korong' => $this->input->post('id_korong'),
                'judul_berita' => $this->input->post('judul_berita'),
                'isi_berita' => $this->input->post('isi_berita'),
                'gambar_berita' => $gambar['file_name']
            );
            $this->Berita_m->insert_berita($data);
           
        } else {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            echo json_encode($error);
        }
        redirect('Berita');
    }
}
?>
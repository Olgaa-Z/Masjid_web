<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_login();
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function socmed(){
        $this->load->view('socmed/socmed_v');
    }

    function deleteSocmed($id){
        $this->Etc->delete_socmed($id);
        redirect('Dashboard/socmed');
    }

    function  editSocmedForm($id){
        $this->load->view('socmed/edit_socmed');
    }

    function editsocmed(){
        $id = $this->input->post('id');

        $data = array(
            'socmed' => $this->input->post('socmed'),
            'link' => $this->input->post('link')
           
        );  
    $this->Etc->edit_socmed($id, $data);
    redirect('Dashboard/socmed');

    }
   

} 
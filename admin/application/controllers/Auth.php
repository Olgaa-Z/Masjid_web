<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function login()
    {
        if(!$this->session->has_userdata('username')){
            $this->load->view('auth/login');
        }else{
            redirect('Dashboard/index');
        }
    }
    
    public function register()
    {
        $this->load->view('auth/register');
    }

    public function reset(){
        $this->load->view('auth/reset_password');
    }

    public function proses_login()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('username', 'Username', 'required'); 
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('Auth/login'); // LOGIN
        
        } else {

            $username = htmlspecialchars($this->input->post('username'));
            $pass = htmlspecialchars($this->input->post('password'));

            // CEK KE DATABASE BERDASARKAN EMAIL
            $cek_login = $this->Auth_model->cek_login($username); 
                
            if($cek_login == FALSE)
            {
                echo '<script>alert("Username yang Anda masukan salah.");window.location.href="'.base_url('/auth/login').'";</script>';
            
            } else {
            
                if(password_verify($pass, $cek_login->password)){
                    // if the username and password is a match
                    $this->session->set_userdata('id', $cek_login->id);
                    $this->session->set_userdata('username', $cek_login->username);
                    $this->session->set_userdata('name', $cek_login->name);
                    
                    redirect('/dashboard');
                        
                } else {
                    echo '<script>alert("Username atau Password yang Anda masukan salah.");window.location.href="'.base_url('/auth/login').'";</script>';
                }
            }
        }
       
    }

    public function proses_register()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]|is_unique[tb_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('auth/register');
        } else {
            $username = $this->input->post('username');
            $name = $this->input->post('name');
            $password = $this->input->post('password');
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'username' => $username,
                'name' => $name,
                'password' => $pass
            ];
            $insert = $this->Auth_model->register("tb_user", $data);
            if($insert){
                echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('index.php/auth/login').'";</script>';
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }


    public function save_password()
    { 
        $this->form_validation->set_rules('new','New','required|alpha_numeric');
        $this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout/header');
            $this->load->view('account/change-pass');
            $this->load->view('layout/footer');
        }else{
            $cek_old = $this->model_account->cek_old();

            if ($cek_old == False){
                $this->session->set_flashdata('error','Old password not match!' );
                $this->load->view('layout/header');
                $this->load->view('account/change-pass');
                $this->load->view('layout/footer');
            }else{
                $this->model_account->save();
                $this->session->sess_destroy();
                $this->session->set_flashdata('error','Your password success to change, please relogin !' );
                $this->load->view('layout/header');
                $this->load->view('layout/login_sign_up');
                $this->load->view('layout/footer');
            }//end if valid_user
        }
    }


    public function profil(){
        $this->load->view('auth/profil');
    }
} 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_func extends CI_Controller {
    public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library('session');
    }
	public function login(){
        extract($_POST);

        $cekUser = $this->Backend_user->cekUser($email, $password);
        $cekUser = json_decode(json_encode($cekUser), TRUE);
        if($cekUser){
            $this->session->set_userdata($cekUser);
            redirect(base_url('backend'));
        }
        else{
            $this->session->set_flashdata('err', 'Email dan Password tidak sesuai.');
            redirect(base_url('backend/login'));
        }
	}
    public function logout(){
        // var_dump($this->session->userdata());
        $this->session->unset_userdata('id');
        redirect(base_url('backend/login'));
    }
}
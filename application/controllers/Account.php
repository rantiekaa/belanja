<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $user_data = $this->session->userdata('customer');
        if($user_data != NULL){
            $data = array(
                'title' => 'Belanja - My Account'
            );

            $userInformation = $this->Frontend_user->information($user_data['id']);
            $userInformation = json_decode(json_encode($userInformation), TRUE);

            $data = $data + $user_data + $userInformation;
            $this->template->load('frontend/template-general','frontend/account/account_detail/index', $data);
        }
    }

	public function index(){
        $data = array(
            'title' => 'Belanja - My Account'
        );

        if($this->session->userdata('customer') == NULL){
            $this->template->load('frontend/template-general','frontend/account/login', $data);
        }
	}

    public function logout(){
        $data = array(
            'title' => 'Belanja - My Account'
        );

        if($this->session->userdata('customer') == NULL){
            $this->template->load('frontend/template-general','frontend/account/login', $data);
        }
        else{
            $this->session->unset_userdata('customer');
            $this->session->set_flashdata('success', 'Logout.');
            redirect(base_url('account'));
        }
	}
    
    public function register(){
        $data = array(
            'title' => 'Belanja - My Account'
        );
        if($this->session->userdata('customer') == NULL){
            $this->template->load('frontend/template-general','frontend/account/register', $data);
        }
        else{
            redirect(base_url("account"));
        }
	}

    public function forgot(){
        $data = array(
            'title' => 'Belanja - My Account'
        );
        if($this->session->userdata('customer') == NULL){
            $this->template->load('frontend/template-general','frontend/account/forgot-password', $data);
        }
        else{
            redirect(base_url("account"));
        }
	}

    public function change(){
        $data = array(
            'title' => 'Belanja - My Account'
        );

        if(isset($_GET['email'])){
            $this->session->set_userdata('change_pass', $_GET['email']);
            redirect(base_url("account/change"));
        }

        if($this->session->userdata('customer') == NULL){
            if($this->session->userdata('change_pass') == NULL){
                redirect(base_url("account"));
            }
            else{
                $this->template->load('frontend/template-general','frontend/account/change-password', $data);
            }
        }
        else{
            redirect(base_url("account"));
        }
	}
}
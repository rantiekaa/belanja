<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $user_data = $this->session->userdata('customer');
        if($user_data == NULL){
            redirect(base_url("account?redirect=".base_url("checkout")));
        }

        if(empty($this->cart->contents())){
            redirect(base_url());
        }
    }

	public function index(){
        $user_data = $this->session->userdata('customer');
        $userInformation = $this->Frontend_user->information($user_data['id']);
        $userInformation = json_decode(json_encode($userInformation), TRUE);

        $data = array(
            'title' => 'Belanja - My Account',
            'customer' => $user_data,
            'customerInformation' => $userInformation
        );
        
        $this->template->load('frontend/template-checkout','frontend/checkout/index', $data);
	}
}
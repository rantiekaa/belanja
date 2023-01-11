<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('cart');
    }

	public function index(){
        $data = array(
            'title' => 'Belanja - Cart'
        );
        
        $this->template->load('frontend/template-general','frontend/cart/index', $data);
	}

    public function update(){
        extract($_POST);
        $banyak = count($rowid);
        $data = array();

        for ($i = 0; $i < $banyak; $i++) {
            $data[] = array(
                'rowid'   => $rowid[$i],
                'qty'     => $qty[$i],
            );
        }
        
        $this->cart->update($data);
        $this->session->set_flashdata('success', 'Cart updated.');
        redirect(base_url("cart"));
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        if(!$_GET['find']){
            redirect(base_url());
        }
    }

	public function index(){
        $obj = $this->Backend_product->selectByHandle($_GET['find']);
        $handle = $this->Backend_product->selectProductDetail($_GET['find']);
        $data = array(
            'title' => 'Belanja - '.$obj->title,
            'product' => $this->Backend_product->selectByHandle($_GET['find']),
            'listProduct' => $this->Backend_product->selectProductDetail($_GET['find'])
        );
        $this->template->load('frontend/template-general','frontend/product/index', $data);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('cart');
    }

	public function index(){
        if(!$_GET['find']){
            redirect(base_url());
        }
        else{
            $obj = $this->Backend_product->selectByHandle($_GET['find']);
            $data = array(
                'title' => 'Belanja - '.$obj->title,
                'product' => $this->Backend_product->selectByHandle($_GET['find']),
                'listProduct' => $this->Backend_product->selectProductDetail($_GET['find'])
            );
            $this->template->load('frontend/template-general','frontend/product/index', $data);
        }
	}

    public function add(){
        extract($_POST);
        
        $data = array(
            'id'      => $id,
            'qty'     => $qty,
            'price'   => $price,
            'name'    => $name
        );

        $this->cart->insert($data);

        $this->session->set_flashdata('success', 'Product has been added to cart.');
        redirect(base_url("product/?find=$handle"));
    }
}
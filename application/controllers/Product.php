<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function index($handle){
        $data = array(
            'title' => 'Belanja - Home',
            'product' => $this->Backend_product->selectByHandle($handle)
        );
        $this->template->load('frontend/template','frontend/product/index', $data);
	}
}
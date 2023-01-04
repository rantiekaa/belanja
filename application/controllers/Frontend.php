<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	public function index(){
        $data = array(
            'title' => 'Belanja - Home',
            'listProduct' => $this->Backend_product->selectAll()
        );
        $this->template->load('frontend/template','frontend/index', $data);
	}
}
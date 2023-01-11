<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        if(!$_GET['find']){
            redirect(base_url());
        }
    }

	public function index(){
        $obj = $this->Backend_category->selectByHandle($_GET['find']);

        if($obj == NULL){
            redirect(base_url());
        }
        
        $data = array(
            'title' => 'Belanja - '.$obj->title,
            'titleCategories' => $obj->title,
            'category' => $this->Backend_category->selectByHandle($_GET['find']),
            'listProduct' => $this->Backend_product->selectByCategory($obj->id)
        );
        $this->template->load('frontend/template-general','frontend/categorys/index', $data);
	}
}
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
        $data = array(
            'title' => 'Belanja - '.$obj->title,
            'category' => $this->Backend_category->selectByHandle($_GET['find'])
        );
        $this->template->load('frontend/template','frontend/categorys/index', $data);
	}
}
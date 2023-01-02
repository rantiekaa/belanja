<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	public function index(){
        $data = array(
            'title' => 'Belanja - Home'
        );
        $this->template->load('frontend/template','frontend/index', $data);
	}
}
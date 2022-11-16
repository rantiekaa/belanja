<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	public function index()
	{
        $data = array(
            'title' => 'Dashboard'
        );
        $this->template->load('backend/template_dashboard','backend/index', $data);
	}

    public function login(){
        $data = array(
            'title' => 'Login Admin'
        );
        $this->template->load('backend/template_account','backend/login', $data);
    }
}
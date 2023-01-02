<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_category extends CI_Controller {
    public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library('session');
    }

    public function add_category(){
        extract($_POST);
        $handle = url_title($title, 'dash', TRUE);
        $data = array(
            'title' => $title,
            'handle' => $handle,
            'create_at' => date("Y-m-d H:i:s")
        );

        $this->Backend_category->add($data);
        $this->session->set_flashdata('success', 'Category Added.');
        redirect(base_url('backend/category'));
    }

    public function edit_category(){
        extract($_POST);
        $handle = url_title($title, 'dash', TRUE);
        $data = array(
            'title' => $title,
            'handle' => $handle,
            'update_at' => date("Y-m-d H:i:s")
        );

        $this->Backend_category->edit($data, $id);
        $this->session->set_flashdata('success', 'Category Edited.');
        redirect(base_url('backend/category'));
    }

    public function delete_category($id){
        $this->session->set_flashdata('success', 'Category Deleted.');
        $this->Backend_category->delete($id);
        redirect(base_url('backend/category'));
    }
}
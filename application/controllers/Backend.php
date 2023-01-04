<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $link = base_url($this->uri->uri_string());
        if (!$this->session->userdata('id')) {
            if (strpos($link,'login') === false) {
                $this->session->set_flashdata('err', 'Kamu belum Login.');
                redirect(base_url('backend/login'), 'refresh');
            }
        }
    }
	public function index()
	{
        $data = array(
            'title' => 'Dashboard',
            'menu' => 'dashboard'
        );
        $this->template->load('backend/template_dashboard','backend/index', $data);
	}

    public function login(){
        if ($this->session->userdata('id')) {
            redirect(base_url('backend'), 'refresh');
        }
        $data = array(
            'title' => 'Login Admin'
        );
        $this->template->load('backend/template_account','backend/login', $data);
    }

    public function customers(){
        $data = array(
            'title' => 'Customers',
            'menu' => 'customers',
            'listUser' => $this->Backend_user->userAll()
        );

        $this->template->load('backend/template_dashboard','backend/customers/list', $data);
    }

    public function product(){
        $data = array(
            'title' => 'Products',
            'menu' => 'product-lists',
            'listProduct' => $this->Backend_product->selectAll()
        );

        $this->template->load('backend/template_dashboard','backend/products/list', $data);
    }

    public function add_product(){
        $data = array(
            'title' => 'Add Product',
            'menu' => 'product-lists',
            'listCategory' => $this->Backend_category->selectAll()
        );

        $this->template->load('backend/template_dashboard','backend/products/add', $data);
    }
    
    public function edit_product($id){
        $data = array(
            'title' => 'Edit Product',
            'menu' => 'product-lists',
            'selectProduct' => $this->Backend_product->select($id),
            'listCategory' => $this->Backend_category->selectAll()
        );

        $this->template->load('backend/template_dashboard','backend/products/edit', $data);
    }

    public function image_product($id){
        $data = array(
            'title' => 'Add Image Product',
            'menu' => 'product-lists',
            'selectProduct' => $this->Backend_product->select($id),
            'productImage' => $this->Backend_product->selectAllImage()
        );

        $this->template->load('backend/template_dashboard','backend/products/image', $data);
    }

    public function category(){
        $data = array(
            'title' => 'Categorys',
            'menu' => 'category',
            'listCategory' => $this->Backend_category->selectAll()
        );

        $this->template->load('backend/template_dashboard','backend/categorys/list', $data);
    }

    public function add_category(){
        $data = array(
            'title' => 'Add Category',
            'menu' => 'category'
        );

        $this->template->load('backend/template_dashboard','backend/categorys/add', $data);
    }

    public function edit_category($id){
        $data = array(
            'title' => 'Edit Category',
            'menu' => 'category',
            'selectCategory' => $this->Backend_category->select($id)
        );

        $this->template->load('backend/template_dashboard','backend/categorys/edit', $data);
    }

    public function orders(){
        $data = array(
            'title' => 'Orders',
            'menu' => 'orders',
            'listUser' => $this->Backend_user->userList()
        );

        $this->template->load('backend/template_dashboard','backend/orders/list', $data);
    }
}
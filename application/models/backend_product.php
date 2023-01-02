<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_product extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function selectAll(){
        $this->db->select("*");
        $this->db->from("product");
        $this->db->order_by("id", "desc");
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function add($data){
        $this->db->insert('product', $data);
    }

    public function edit($data, $id){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('product');
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('product');
    }

    public function select($id){
        $this->db->select("*");
        $this->db->from("product");
        $this->db->where("id", $id);
        $query = $this->db->get()->row();
        return $query;
    }
}
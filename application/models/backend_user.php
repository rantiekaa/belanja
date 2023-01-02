<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_user extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function userList(){
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where("role", 2);
        $this->db->order_by("id", "desc");
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function categoryList(){
        $this->db->select("*");
        $this->db->from("category");
        $this->db->order_by("id", "desc");
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function cekUser($email, $password){
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where(array(
            'email' => $email,
            'password' => sha1($password)
        ));
        $query = $this->db->get()->row();
        return $query;
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_user extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add($data){
        $this->db->insert('users', $data);
    }

    public function edit($data, $id){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('users');
    }

    public function addInformation($data){
        $this->db->insert('users_information', $data);
    }

    public function selectByEmail($email){
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where(array("email" => $email, "role" => 2));
        $query = $this->db->get()->row();
        return $query;
    }

    public function information($id){
        $this->db->select("*");
        $this->db->from("users_information");
        $this->db->where("user_id", $id);
        $query = $this->db->get()->row();
        return $query;
    }
    
    public function login($data){
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where($data);
        $query = $this->db->get()->row();
        return $query;
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_general extends CI_Controller {
    public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library('session');
    }

    public function index(){
        echo "tes";
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        // Function untuk pemanggilan helper
		$this->load->helper('html');
    }

    public function index() {
        $this->load->view("admin/overview");
    }

    public function barang() {
        $this->load->view("admin/barang");
    }

}
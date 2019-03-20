<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	
	// Constructor adalah method yang diakses paling awal
    public function __construct() {
        parent::__construct();
		
		// Function untuk pemanggilan helper
		$this->load->helper('html');

		// Function untuk pemanggilan model
		$this->load->model("Barang_model");
    }

    public function index() {
        $this->load->view("admin/barang");
    }
	
	// Function yang digunakan untuk memanggil form Tambah data
	public function Add()
	{
		
	}
	
	// Function yang digunakan untuk memanggil form Edit data
	public function Edit()
	{
		
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_tambah_barang extends CI_Controller {

	// Constructor adalah method yang diakses paling awal
    public function __construct() {
        parent::__construct();
		
		// Function untuk pemanggilan helper
		$this->load->helper('html');

		// Memanggil library form validation
		$this->load->library('form_validation');

		// Function untuk pemanggilan model
		$this->load->model("Barang_model");

    }

    public function index() {
        $this->load->view("admin/barang/tambah_barang");
    }
	
	// Form validation
	public function aksi() {
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
		$this->form_validation->set_rules('deskripsi_barang', 'Deskripsi Barang', 'required');
		$this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required');
		$this->form_validation->set_rules('stok_barang', 'Stok Barang', 'required');

		// Cek apakah form validation berjalan
		if( $this->form_validation->run() != false ) 
		{
			echo "Form validation oke";
		}
		else
		{
			$this->load->view('admin/barang/tambah_barang');
		}

	}

}
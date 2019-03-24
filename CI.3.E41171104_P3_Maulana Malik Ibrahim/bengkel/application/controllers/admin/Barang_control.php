<?php 

defined('BASEPATH') OR exit('No direct script access allowd');

/**
 * 
 */

class Barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Barang_model");
		$this->load->library('form_validasi');
	}

	public function index();
	{
		$data["barang"] = $this->Barang_model->getAll();
		$this->load->view("admin/")
	}
}
 ?>
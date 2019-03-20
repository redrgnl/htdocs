<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
function __construct(){
		parent::__construct();
		$this->load->helper('html');
		$this->load->model('coba_tampil');
	}

	public function index(){
		$data['user'] = $this->coba_tampil->ambil_data()->result();
		$data['nama_web'] = "Bengkel.com";
		$this->load->view('index.php',$data);
	}
 
}
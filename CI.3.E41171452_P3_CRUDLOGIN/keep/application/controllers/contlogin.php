<?php 
 
class contlogin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/login"));
		}
	}
 
	function index(){
		$this->load->view('admin/content/praktik3/yao');
	}
}
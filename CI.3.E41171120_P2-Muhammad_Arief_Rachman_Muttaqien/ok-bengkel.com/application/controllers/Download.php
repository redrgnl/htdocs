<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'download'));
	}

	public function index() {
		$this->load->view('view_download');
	}

	public function do_download() {
		force_download('img/71560.jpg', NULL);
	}
}
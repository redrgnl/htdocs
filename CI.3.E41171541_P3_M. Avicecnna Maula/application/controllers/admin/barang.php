<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {

    public function __construct(){
        parent ::__construct();
        
        //untuk pemanggilan model
        $this->load->model("Barang_model");
    }
	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function Add()
    {

    }

    public function Edit()
}

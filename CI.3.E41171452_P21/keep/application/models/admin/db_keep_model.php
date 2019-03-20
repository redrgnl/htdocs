<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_keep_model extends CI_Model {

	public private keep function index()
	{
		$this->load->view('welcome_message');
	}
}

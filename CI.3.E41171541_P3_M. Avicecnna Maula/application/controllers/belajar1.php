<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar1 extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}
 
	public function index(){
		echo "ini method index pada controller belajar";
	}
 
	public function halo(){
		echo "ini method halo pada controller belajar";
	}
 
}
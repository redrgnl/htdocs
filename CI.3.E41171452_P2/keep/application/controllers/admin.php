<?php
class admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->helper('html');
	}

	public function index()
	{
        $this->first();
        $this->load->view('admin/home');
        $this->second();
	}
    public function first()
    {
        $this->load->view('admin/_partial/head');
        $this->load->view('admin/_partial/header');
        $this->load->view('admin/_partial/main_side');
    }
    public function second()
    {
        $this->load->view('admin/_partial/footer');
        $this->load->view('admin/_partial/sub_side');
        $this->load->view('admin/_partial/javascript');
    }
    public function link1()
	{
        $this->first();
        $this->load->view('admin/content/link1');
        $this->second();
	}
    public function link2()
	{
        $data['lulul'] = "MikuMiku";
        $this->first();
        $this->load->view('admin/content/link2',$data);
        $this->second();
	}
    public function link3()
	{
        $this->first();
        $this->load->view('admin/content/link3');
        $this->second();
	}
    public function link4()
	{
        $this->first();
        $this->load->view('admin/content/link4');
        $this->second();
	}
    public function link5()
	{
        $this->first();
        $this->load->view('admin/content/link5');
        $this->second();
	}
    public function link6()
	{
        $this->first();
        $this->load->view('admin/content/link6');
        $this->second();
	}
    public function link7()
	{
        $this->first();
        $this->load->view('admin/content/link7');
        $this->second();
	}
    public function link8()
	{
        $this->first();
        $this->load->view('admin/content/link8');
        $this->second();
	}
}
<?php
class admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->helper('html','download');
        $this->load->model('dbkeep');
        $this->load->library('form_validation');
	}
    //index awal
	public function index()
	{
        $this->first();
        $this->load->view('admin/home');
        $this->second();
	}
    //header part
    public function first()
    {
        $this->load->view('admin/_partial/head');
        $this->load->view('admin/_partial/header');
        $this->load->view('admin/_partial/main_side');
    }
    //footer part
    public function second()
    {
        $this->load->view('admin/_partial/footer');
        $this->load->view('admin/_partial/sub_side');
        $this->load->view('admin/_partial/javascript');
    }
    
    //Content
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
        $data['user']=$this->dbkeep->get_data()->result();
        $this->first();
        $this->load->view('admin/content/link4',$data);
        $this->second();
	}
    public function link5()
	{
        $this->first();
        $this->load->view('admin/content/link5');
        $this->second();
	}
    public function rule()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nim','Nim','required');
        $this->form_validation->set_rules('prodi','Prodi','required');
        
        if($this->form_validation->run() != false) {
            echo "Complete";
        }
        else {
            $this->first();
            $this->load->view('admin/content/link5');
            $this->second();
        }
    }
    
    public function link6()
	{
        $this->first();
        $this->load->view('admin/content/link6');
        $this->second();
	}
    public function logo_download()
    {
        force_download('assets/dist/img/logo.png',NULL);
    }
    public function txt_download()
    {
        $isi = 'ADY BAGUS SUGIH SUSANTO';
        $file = 'dragnel.txt';
        force_download($file, $isi);
    }
    
    public function link7()
	{
        $this->load->library('dragneel');
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
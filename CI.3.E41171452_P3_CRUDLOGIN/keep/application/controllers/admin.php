<?php
class admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->helper('html','download','url');
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
        $this->load->view('admin/content/praktik2/link1');
        $this->second();
	}
    public function link2()
	{
        $data['lulul'] = "MikuMiku";
        $this->first();
        $this->load->view('admin/content/praktik2/link2',$data);
        $this->second();
	}
    public function link3()
	{
        $this->first();
        $this->load->view('admin/content/praktik2/link3');
        $this->second();
	}
    public function link4()
	{
        $data['user']=$this->dbkeep->get_data()->result();
        $this->first();
        $this->load->view('admin/content/praktik2/link4',$data);
        $this->second();
	}
    public function link5()
	{
        $this->first();
        $this->load->view('admin/content/praktik2/link5');
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
            $this->load->view('admin/content/praktik2/link5');
            $this->second();
        }
    }
    
    public function link6()
	{
        $this->first();
        $this->load->view('admin/content/praktik2/link6');
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
        $this->load->view('admin/content/praktik2/link7');
        $this->second();
	}
    public function link8()
	{
        $this->first();
        $this->load->view('admin/content/praktik2/link8');
        $this->second();
	}
    
    //praktikum 3
    public function llink3()
    {
        $data['ddata']=$this->dbkeep->get_ddata()->result();
        $this->first();
        $this->load->view('admin/content/praktik3/llink3',$data);
        $this->second();
    }
    
    function adddata(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
		
        $data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->dbkeep->adddata($data,'user');
		redirect('admin/llink3');
	}
    
    public function llink7()
    {
        $this->first();
        $this->load->view('admin/content/praktik3/llink7');
        $this->second();
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->dbkeep->deldata($where,'user');
        redirect('admin/llink3');
    }
    
    function edit($id){
		$where = array('id' => $id);
		$data['pasukan'] = $this->dbkeep->getdata_id($where,'user')->result();
		
        $this->first();
        $this->load->view('admin/content/praktik3/edit',$data);
        $this->second();
	}
    
    function uupdate(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$alamat = $this->input->post('alamat');
	$pekerjaan = $this->input->post('pekerjaan');
 
	$data = array(
		'nama' => $nama,
		'alamat' => $alamat,
		'pekerjaan' => $pekerjaan
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->dbkeep->updates($where,$data,'user');
	redirect('admin/llink3');
    }
    
    public function login()
    {
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'nama' => $username,
			'alamat' => ($password)
			);
		$cek = $this->dbkeep->cklogin("user",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("contlogin"));
 
		}else{
			redirect(base_url('admin/yaooo'));
		}
    }
    function logout(){
	   $this->session->sess_destroy();
	   redirect(base_url('admin/yaooo'));
    }
    public function yaooo()
    {
        $this->load->view('admin/content/praktik3/login');
    }
}
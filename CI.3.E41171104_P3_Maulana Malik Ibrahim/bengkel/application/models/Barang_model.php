<?php defined('BASEPATH') OR exit('No direct script acces allowed'); 

class Barang_model extends CI_model
{
	private $_table = "barang";

	public $kd_barang;
	public $namaBarang;
	public $deskripsiBarang;
	public $hargaBarang;
	public $stokBarang;


	public function rules()
	{
		return[
			['field' => 'namaBarang',
			'label' => 'NamaBarang',
			'rules' => 'required'],
			
			['field' => 'deskripsiBarang',
			'label'=> 'DeskripsiBarang',
			'rules' => 'required'],

			['field' => 'hargaBarang',
			'label' => 'StokBarang',
			'rules' => 'numeric']

			['field' => 'stokBarang',
			'label' => 'StokBarang',
			'rules' => 'numeric']
		];
	}	

	public function getAll()
	{
		// fungsi mengambil data pada database ,
		// mengembalikan sebuag aray dari row
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["kd_barang" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->kd_barang = uniqid();
		$this->namaBarang = $post["namaBarang"];
		$this->deskripsiBarang = $post["deskripsiBarang"];
		$this->stokBarang = $post["stokBarang"];
		$this->hargaBarang = $post["hargaBarang"];
		$this->db->insert($this->_table, $this);
	}

	public function updtate() 
	{
		$post = $this->input->post();
		$this->kd_barang = uniqid();
		$this->namaBarang = $post["namaBarang"];
		$this->deskripsiBarang = $post["deskripsiBarang"];
		$this->stokBarang = $post["stokBarang"];
		$this->hargaBarang = $post["hargaBarang"];
		$this->db->update($this->_table, $this = array('kd_barang' => $post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array("kd_barang" => $id));
	}

}
?>
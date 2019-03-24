<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	/** Mendefinisikan variabel */
	
	// Nama tabel
	private $_table = "tbl_barang";
	
	// Atribut/field
	public $kode_barang;
	public $nama_barang;
	public $deskripsi_barang;
	public $harga_barang;
	public $stok_barang;

	/** Membuat function rules untuk validasi inputan data */
	public function rules() {
		return [
			['field' => 'nama_barang',
			 'label' => 'Nama Barang',
			 'rules' => 'required'],
			 
			['field' => 'deskripsi_barang',
			 'label' => 'Deskripsi Barang',
			 'rules' => 'required'],
			 
			['field' => 'harga_barang',
			 'label' => 'Harga Barang',
			 'rules' => 'numeric'],
			 
			['field' => 'stok_barang',
			 'label' => 'Stok Barang',
			 'rules' => 'numeric']
		];
	}
	
	/** Function - function untuk query dari database */
	
	// Mengambil semua data dari database
	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}
	
	// Mengambil data menurut kode barang (tiap baris)
	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["kode_barang" => $id])->row();
	}
	
	// Menyimpan data ke dalam tabel
	public function save()
	{
		$post = $this->input->post(); // Mengambil data dari form
		$this->kode_barang = uniqid(); // uniqid() untuk generate id
		// Mengambil data sesuai atribut name di HTML
		$this->nama_barang = $post["nama_barang"];
		$this->deskripsi_barang = $post["deskripsi_barang"];
		$this->harga_barang = $post["harga_barang"];
		$this->stok_barang = $post["stok_barang"];
		$this->db->insert($this->_table, $this); // $this->_table : menekankan pada tabel, $table = menekankan class Barang_model
	}
	
	// Memperbarui (update) data ke dalam tabel
	public function update()
	{
		$post = $this->input->post();
		$this->kode_barang = uniqid();
		$this->nama_barang = $post["nama_barang"];
		$this->deskripsi_barang = $post["deskripsi_barang"];
		$this->harga_barang = $post["harga_barang"];
		$this->stok_barang = $post["stok_barang"];
		$this->db->update($this->_table, $this, array('kode_barang' => $post['id']));
	}
	
	// Menghapus data menurut kode barang (tiap baris)
	public function delete($id)
	{
		return $this->db->delete($this->_table, array('kode_barang' => $id)); // "=>" tanda untuk mengisi data di dalam array
	}
		
}
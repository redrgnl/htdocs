<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    //mendefinisikan variabel table secara private
    private $_table = "barang";

    //mendefinisikan variabel data barang secara public
    public $kode_barang;
    public $nama_barang;
    public $deskripsi_barang;
    public $harga_barang;
    public $stok_barang;

    //mengambil semua data dari database
    public function rules()
    {
        return[
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
    //mengambil semua data dari database
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    //
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode_barang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_barang = uniqid();
        $this->nama_barang = $post["nama_barang"];
        $this->deskripsi_barang = $post["deskripsi_barang"];
        $this->harga_barang = $post["harga_barang"];
        $this->stok_barang = $post["stok_barang"];
        $this->db->insert($this->_table, $this);
    }

    // fungsi -> sama halnya (.) pada java  sedangkan => untuk mengisi di suatu table
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

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_barang" => $id));
    }
}
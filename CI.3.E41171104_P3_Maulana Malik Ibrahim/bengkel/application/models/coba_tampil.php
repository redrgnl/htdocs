	<?php 

class coba_tampil extends CI_Model{
	function ambil_data(){
		return $this->db->get('user');
	}
}
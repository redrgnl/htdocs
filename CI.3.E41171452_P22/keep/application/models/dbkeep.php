<?php 
 
class dbkeep extends CI_Model{
	function get_data(){
		return $this->db->get('user');
	}
}
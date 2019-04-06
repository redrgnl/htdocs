<?php 
 
class dbkeep extends CI_Model{
	function get_data(){
		return $this->db->get('user');
	}
    function get_ddata(){
        return $this->db->get('user');
    }
    
    function adddata($data,$table)
    {
		$this->db->insert($table,$data);
	}
    
    function deldata($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    function getdata_id($where,$table)
    {		
	   return $this->db->get_where($table,$where);
    }
    function updates($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
    function cklogin($table,$where){		
		return $this->db->get_where($table,$where);
	}
}